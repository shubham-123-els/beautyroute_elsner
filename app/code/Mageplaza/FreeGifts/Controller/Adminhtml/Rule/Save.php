<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeGifts
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule;

use Exception;
use Magento\Backend\App\Action\Context;
use Magento\Catalog\Model\Session;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Registry;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Framework\View\Result\PageFactory;
use Mageplaza\FreeGifts\Controller\Adminhtml\Rule;
use Mageplaza\FreeGifts\Helper\Data;
use Mageplaza\FreeGifts\Model\Banner;
use Mageplaza\FreeGifts\Model\BannerFactory;
use Mageplaza\FreeGifts\Model\RuleFactory;
use Mageplaza\FreeGifts\Model\Source\Apply as ApplyType;

/**
 * Class Save
 * @package Mageplaza\FreeGifts\Controller\Adminhtml\Rule
 */
class Save extends Rule
{
    /**
     * @var BannerFactory
     */
    protected $bannerFactory;

    /**
     * @var DateTime
     */
    protected $date;

    /**
     * Save constructor.
     *
     * @param Context $context
     * @param PageFactory $pageFactory
     * @param Registry $registry
     * @param DateTime $datetime
     * @param RuleFactory $ruleFactory
     * @param ApplyType $applyType
     * @param Session $catalogSession
     * @param PageFactory $resultPageFactory
     * @param BannerFactory $bannerFactory
     * @param DateTime $date
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory,
        Registry $registry,
        DateTime $datetime,
        RuleFactory $ruleFactory,
        ApplyType $applyType,
        Session $catalogSession,
        PageFactory $resultPageFactory,
        BannerFactory $bannerFactory,
        DateTime $date
    ) {
        $this->bannerFactory = $bannerFactory;
        $this->date          = $date;

        parent::__construct(
            $context,
            $pageFactory,
            $registry,
            $datetime,
            $ruleFactory,
            $applyType,
            $catalogSession,
            $resultPageFactory
        );
    }

    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $data          = $this->getRuleData();
        $back          = $this->getRequest()->getParam('back');
        $rule          = $this->_initObject();
        $giftListEmpty = (int) $rule->getId() === 0 && empty($this->_catalogSession->getNewGifts());
        $rule->addData($data);
        $rule->loadPost($data);

        try {
            $rule->save();
            if (isset($data['banner'])) {
                foreach ($data['banner'] as $bannerId => $bannerData) {
                    $bannerData['rule_id']    = $rule->getId();
                    $bannerData['created_at'] = $this->date->date();
                    /** @var Banner $banner */
                    list($banner, $bannerData) = $this->initBanner($bannerId, $bannerData);

                    if ($banner->getId() && $data['banner'][$banner->getId()]['removed']
                        || !$banner->getId() && $bannerData['removed']) {
                        $banner->delete();
                    } else {
                        $banner->addData($bannerData);
                        $banner->save();
                    }
                }
            }
        } catch (Exception $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
        }

        if ($giftListEmpty || empty($rule->getGiftArray())) {
            $this->messageManager->addErrorMessage(__('Rule with empty gift list will not take effect.'));

            return $this->getResultRedirect('*/*/edit', [
                'rule_id'    => $rule->getId(),
                'active_tab' => 'mpfreegifts_actions_tab',
            ]);
        }
        $this->messageManager->addSuccessMessage(__('You saved the rule.'));

        return $back
            ? $this->getResultRedirect('*/*/edit', ['rule_id' => $rule->getId()])
            : $this->getResultRedirect('*/*/');
    }

    /**
     * @return mixed
     */
    public function getRuleData()
    {
        $data = $this->getRequest()->getParam('rule');

        if (!isset($data['use_config_notice'])) {
            $data['use_config_notice'] = '0';
        }

        if (!isset($data['use_config_allow_notice'])) {
            $data['use_config_allow_notice'] = '0';
        }

        return $data;
    }

    /**
     * @param int $bannerId
     * @param array $data
     *
     * @return array
     */
    protected function initBanner($bannerId, $data)
    {
        /** @var Banner $file */
        $banner = $this->bannerFactory->create();

        $banner->load($bannerId);

        if (!$banner->getId()) {
            unset($data['banner_id']);
        }

        if (isset($data['status'])) {
            $data['status'] = true;
        } else {
            $data['status'] = false;
        }

        if (!empty($data['tooltip'])) {
            $data['tooltip'] = Data::jsonEncode($data['tooltip']);
        }

        return [$banner, $data];
    }
}
