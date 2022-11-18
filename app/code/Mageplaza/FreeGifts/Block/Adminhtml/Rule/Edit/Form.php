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

namespace Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit;

use Magento\Backend\Block\Widget\Form\Element\Dependence;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Framework\Exception\LocalizedException;

/**
 * Class Form
 * @package Mageplaza\FreeGifts\Block\Adminhtml\Rule\Edit
 */
class Form extends Generic
{
    /**
     * @return Generic
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'edit_form',
                    'action' => $this->getUrl(
                        '*/*/save',
                        ['rule_id' => $this->getRequest()->getParam('rule_id')]
                    ),
                    'method' => 'post',
                    'enctype' => 'multipart/form-data',
                    'autocomplete' => 'off',
                ]
            ]
        );
        $form->setUseContainer(true);
        $this->setChild(
            'form_after',
            $this->getLayout()->createBlock(Dependence::class)
                ->addFieldMap('rule_mp_auto_play', 'rule[mp_auto_play]')
                ->addFieldMap('rule_mp_auto_timeout', 'rule[mp_auto_timeout]')
                ->addFieldDependence('rule[mp_auto_timeout]', 'rule[mp_auto_play]', 1)
        );
        $this->setForm($form);

        return parent::_prepareForm();
    }
}
