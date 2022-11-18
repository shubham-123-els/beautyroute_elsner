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

namespace Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Form\Element\Dependence;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Backend\Block\Widget\Form\Renderer\Fieldset;
use Magento\Config\Model\Config\Source\Website;
use Magento\Config\Model\Config\Source\Yesno;
use Magento\Customer\Model\ResourceModel\Group\Collection as CustomerGroupCollection;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Rule\Block\Conditions;
use Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab\Banner\Image;
use Mageplaza\FreeGifts\Block\Adminhtml\Rule\Gift\Listing as GiftListing;
use Mageplaza\FreeGifts\Helper\Rule as HelperRule;
use Mageplaza\FreeGifts\Model\Source\AddAutoBy;
use Mageplaza\FreeGifts\Model\Source\Position;
use Mageplaza\FreeGifts\Model\Source\Status;
use Mageplaza\FreeGifts\Model\Source\Type;

/**
 * Class Banner
 * @package Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit\Tab
 */
class Banner extends AbstractTab
{
    /**
     * @var Position
     */
    protected $position;

    /**
     * Banner constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Status $status
     * @param Website $website
     * @param Fieldset $fieldset
     * @param Conditions $conditions
     * @param Type $type
     * @param Yesno $yesno
     * @param GiftListing $giftListing
     * @param HelperRule $helperRule
     * @param CustomerGroupCollection $customerGroup
     * @param AddAutoBy $addAutoBy
     * @param Position $position
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Status $status,
        Website $website,
        Fieldset $fieldset,
        Conditions $conditions,
        Type $type,
        Yesno $yesno,
        GiftListing $giftListing,
        HelperRule $helperRule,
        CustomerGroupCollection $customerGroup,
        AddAutoBy $addAutoBy,
        Position $position,
        array $data = []
    ) {
        $this->position = $position;

        parent::__construct(
            $context,
            $registry,
            $formFactory,
            $status,
            $website,
            $fieldset,
            $conditions,
            $type,
            $yesno,
            $giftListing,
            $helperRule,
            $customerGroup,
            $addAutoBy,
            $data
        );
    }

    /**
     * @return Generic
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        $rule = $this->getCurrentRule();
        $form = $this->_formFactory->create();
        $form->setHtmlIdPrefix('rule_');
        $form->setFieldNameSuffix('rule');

        $bannerFieldset = $form->addFieldset('mpfreegifts_banner_fieldset', [
            'legend' => __('Upload Banner Image'),
            'class'  => 'fieldset-wide'
        ]);

        $bannerFieldset->addField('mp_images', 'hidden', [
            'name'               => 'mp_images',
            'label'              => __('Images'),
            'title'              => __('Images'),
            'after_element_html' => $this->getImageRenderHtml(),
        ]);

        $bannerFieldset->addField('mp_banner_position', 'select', [
            'name'   => 'mp_banner_position',
            'label'  => __('Position'),
            'title'  => __('Position'),
            'values' => $this->position->toOptionArray()
        ]);

        $listGiftFieldset = $form->addFieldset('mpfreegifts_banner_design_fieldset', [
            'legend' => __('Design Banner'),
        ]);

        $listGiftFieldset->addField('mp_banner_width', 'text', [
            'name'  => 'mp_banner_width',
            'class' => 'validate-number',
            'label' => __('Banner Image Width (px)'),
            'title' => __('Banner Image Width (px)')
        ]);

        $listGiftFieldset->addField('mp_banner_height', 'text', [
            'name'  => 'mp_banner_height',
            'class' => 'validate-number',
            'label' => __('Banner Image Height (px)'),
            'title' => __('Banner Image Height (px)')
        ]);

        $listGiftFieldset->addField('mp_show_next_prev_button', 'select', [
            'name'   => 'mp_show_next_prev_button',
            'label'  => __('Show Next/Prev Buttons'),
            'title'  => __('Show Next/Prev Buttons'),
            'values' => $this->_yesno->toOptionArray(),
            'value'  => 1,
            'note'   => __('If Yes, multiple banners will be displayed in a slider, and Next/Prev buttons will be placed next to that slider.')
        ]);

        $listGiftFieldset->addField('mp_show_dots', 'select', [
            'name'   => 'mp_show_dots',
            'label'  => __('Show Dots Navigation'),
            'title'  => __('Show Dots Navigation'),
            'values' => $this->_yesno->toOptionArray(),
            'value'  => 1,
            'note'   => __('If Yes, multiple banners will be displayed in a slider, and Dots Navigation will be displayed with that slider.')

        ]);

        $mpAutoPlay = $listGiftFieldset->addField('mp_auto_play', 'select', [
            'name'   => 'mp_auto_play',
            'label'  => __('Auto Play'),
            'title'  => __('Auto Play'),
            'values' => $this->_yesno->toOptionArray(),
            'value'  => 1,
            'note'   => __('Select Yes to allow next banner to be auto-displayed.')

        ]);

        $mpAutoTimeOut = $listGiftFieldset->addField('mp_auto_timeout', 'text', [
            'name'  => 'mp_auto_timeout',
            'class' => 'validate-number',
            'label' => __('Auto Time-Out'),
            'title' => __('Auto Time-Out')
        ]);

        $form->addValues($rule->getData());
        $this->setChild(
            'form_after',
            $this->getLayout()->createBlock(Dependence::class)
                ->addFieldMap($mpAutoPlay->getHtmlId(), $mpAutoPlay->getName())
                ->addFieldMap($mpAutoTimeOut->getHtmlId(), $mpAutoTimeOut->getName())
                ->addFieldDependence($mpAutoTimeOut->getName(), $mpAutoPlay->getName(), '1')
        );
        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * Return Tab label
     *
     * @return string
     * @api
     */
    public function getTabLabel()
    {
        return __('Free Gift Banner');
    }

    /**
     * @return string
     * @throws LocalizedException
     */
    protected function getImageRenderHtml()
    {
        return $this->getLayout()->createBlock(Image::class)
            ->setApplyFor($this->getCurrentRule()->getApplyFor())
            ->setRuleId($rule = $this->getCurrentRule()->getId())
            ->toHtml();
    }
}
