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
 * @package     Mageplaza_TableRateShipping
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab;

use Magento\Backend\Block\Template\Context;
use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Cms\Model\Wysiwyg\Config;
use Magento\Framework\Data\Form;
use Magento\Framework\Data\Form\Element\Fieldset;
use Magento\Framework\Data\FormFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Registry;
use Magento\Store\Model\Group;
use Magento\Store\Model\Store;
use Mageplaza\TableRateShipping\Helper\Data;
use Mageplaza\TableRateShipping\Model\Method;
use Mageplaza\TableRateShipping\Model\RegistryConstants;

/**
 * Class Labels
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Method\Edit\Tab
 */
class Labels extends Generic
{
    /**
     * @var Method
     */
    private $_method;

    /**
     * @var Config
     */
    private $wysiwygConfig;

    /**
     * Labels constructor.
     *
     * @param Context $context
     * @param Registry $registry
     * @param FormFactory $formFactory
     * @param Config $wysiwygConfig
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        FormFactory $formFactory,
        Config $wysiwygConfig,
        array $data = []
    ) {
        $this->wysiwygConfig = $wysiwygConfig;

        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * {@inheritdoc}
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        $object = $this->getObject();

        /** @var Form $form */
        $form = $this->_formFactory->create();

        $data = [
            'labels'   => Data::jsonDecode($object->getLabels()),
            'comments' => Data::jsonDecode($object->getComments()),
        ];

        $this->createLabelsFieldset($form, $data);

        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * Create store specific fieldset
     *
     * @param Form $form
     * @param array $data
     *
     * @return Fieldset
     * @throws LocalizedException
     */
    private function createLabelsFieldset($form, $data)
    {
        $fieldSet = $form->addFieldset('labels_fieldset', ['legend' => __('Labels')]);

        $this->addFields($fieldSet, 0, $data, false);

        if ($this->_storeManager->isSingleStoreMode()) {
            return $fieldSet;
        }

        /** @var \Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset $renderer */
        $renderer = $this->getLayout()->createBlock(
            \Magento\Backend\Block\Store\Switcher\Form\Renderer\Fieldset::class
        );
        $fieldSet->setRenderer($renderer);
        $this->createStoreSpecificLabels($fieldSet, $data);

        return $fieldSet;
    }

    /**
     * @param Fieldset $fieldSet
     * @param array $data
     */
    private function createStoreSpecificLabels($fieldSet, $data)
    {
        foreach ($this->_storeManager->getWebsites() as $website) {
            $fieldSet->addField("w_{$website->getId()}_label", 'note', ['label' => $website->getName()]);

            /** @var Group $group */
            foreach ($website->getGroups() as $group) {
                if ($group->getStoresCount() === 0) {
                    continue;
                }

                $fieldSet->addField("sg_{$group->getId()}_label", 'note', ['label' => $group->getName()]);

                /** @var Store $store */
                foreach ($group->getStores() as $store) {
                    $fieldSet->addField("s_{$store->getId()}_label", 'note', ['label' => $store->getName()]);

                    $this->addFields($fieldSet, $store->getId(), $data);
                }
            }
        }
    }

    /**
     * @param Fieldset $fieldSet
     * @param int $storeId
     * @param array $data
     * @param bool $hasLabel
     */
    private function addFields($fieldSet, $storeId, $data, $hasLabel = true)
    {
        if ($hasLabel) {
            $fieldSet->addField("label_{$storeId}", 'text', [
                'name'  => 'labels[' . $storeId . ']',
                'label' => __('Label'),
                'value' => $data['labels'][$storeId] ?? '',
            ]);
        }

        $fieldSet->addField("comment_{$storeId}", 'editor', [
            'name'   => 'comments[' . $storeId . ']',
            'label'  => __('Description'),
            'value'  => $data['comments'][$storeId] ?? '',
            'config' => $this->wysiwygConfig->getConfig([
                'add_variables' => false,
                'add_widgets'   => false,
                'height'        => '200px'
            ])
        ]);
    }

    /**
     * @return Method
     */
    private function getObject()
    {
        if ($this->_method === null) {
            $this->_method = $this->_coreRegistry->registry(RegistryConstants::METHOD);
        }

        return $this->_method;
    }
}
