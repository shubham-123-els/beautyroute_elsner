<?php
/**
 * BSS Commerce Co.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://bsscommerce.com/Bss-Commerce-License.txt
 *
 * @category   BSS
 * @package    Bss_ImportExportCore
 * @author     Extension Team
 * @copyright  Copyright (c) 2020 BSS Commerce Co. ( http://bsscommerce.com )
 * @license    http://bsscommerce.com/Bss-Commerce-License.txt
 */
namespace Bss\ImportExportCore\Block\Adminhtml\Import\Edit;

use Magento\ImportExport\Model\Import;
use Magento\Framework\AuthorizationInterface;

/**
 * Import edit form block
 *
 * @author      Magento Core Team <core@magentocommerce.com>
 */
class Form extends \Magento\ImportExport\Block\Adminhtml\Import\Edit\Form
{
    /**
     * @var \Magento\ImportExport\Model\Import\ConfigInterface
     */
    protected $importConfig;

    /**
     * @var \Magento\ImportExport\Model\Import\Entity\Factory
     */
    protected $entityFactory;

    /**
     * @var AuthorizationInterface
     */
    private $authorization;

    /**
     * Form constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param Import $importModel
     * @param \Magento\ImportExport\Model\Source\Import\EntityFactory $sourceEntityFactory
     * @param \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory
     * @param Import\ConfigInterface $importConfig
     * @param Import\Entity\Factory $entityFactory
     * @param AuthorizationInterface $authorization
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\ImportExport\Model\Import $importModel,
        \Magento\ImportExport\Model\Source\Import\EntityFactory $sourceEntityFactory,
        \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory,
        \Magento\ImportExport\Model\Import\ConfigInterface $importConfig,
        \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory,
        AuthorizationInterface $authorization,
        array $data = []
    ) {
        $this->importConfig = $importConfig;
        $this->entityFactory = $entityFactory;
        $this->authorization = $authorization;
        parent::__construct($context, $registry, $formFactory, $importModel, $sourceEntityFactory, $behaviorFactory);
    }

    /**
     * Add fieldsets
     *
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _prepareForm()
    {
        parent::_prepareForm();

        $form = $this->getForm();
        $form->setData('action', $this->getUrl('*/*/validate'));
        $elements = $form->getElements();
        foreach ($elements as $fieldset) {
            if ($fieldset->getId() == 'base_fieldset') {
                $fields = $fieldset->getElements();
                $versionHtml = '<div style="display:none;" id="bss-version"><span>'
                    . __("Version") .
                    '</span>: <span id="bss-version-number">*</span></div>';
                foreach ($fields as $field) {
                    if ($field->getName() == "entity") {
                        $field->setData("note", $versionHtml);
                        $field->setData("values", $this->getEntityOptions());
                    }
                }
            }
        }
        $uniqueBehaviors = $this->_importModel->getUniqueEntityBehaviors();
        foreach ($uniqueBehaviors as $behaviorCode => $behaviorClass) {
            $behaviorObject = $this->_behaviorFactory->create($behaviorClass);
            if (method_exists($behaviorObject, 'getEnableBehaviorFields')) {
                $neededFields = $behaviorObject->getEnableBehaviorFields();
                foreach ($elements as $fieldset) {
                    if ($fieldset->getId() == $behaviorCode . '_fieldset') {
                        $fields = $fieldset->getElements();
                        foreach ($fields as $field) {
                            if (isset($neededFields[$field->getName()])) {
                                $fieldConfig = $neededFields[$field->getName()];
                                if (count($fieldConfig) > 0) {
                                    foreach ($fieldConfig as $key => $value) {
                                        $field->setData($key, $value);
                                    }
                                }
                                unset($neededFields[$field->getName()]);
                            } else {
                                $fieldset->removeField($field->getId());
                            }
                        }

                        if (count($neededFields) > 0) {
                            foreach ($neededFields as $name => $newField) {
                                if ($name) {
                                    $field = $fieldset->addField(
                                        $behaviorCode . "_" .$name,
                                        isset($newField['type']) ? $newField['type'] : "text",
                                        [
                                            "name" => $name
                                        ]
                                    );

                                    foreach ($newField as $key => $value) {
                                        $field->setData($key, $value);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return $this;
    }

    /**
     * @return array
     */
    protected function getEntityOptions()
    {
        $options = $this->_entityFactory->create()->toOptionArray();
        $importEntities = $this->importConfig->getEntities();
        foreach ($options as $key => $entityOption) {
            if (!empty($entityOption['value']) && !empty($importEntities[$entityOption['value']])) {
                $entityModel = $importEntities[$entityOption['value']]['model'];
                $entityAdapter = $this->entityFactory->create($entityModel);
                if (method_exists($entityAdapter, 'getAclResource')) {
                    $resource = $entityAdapter->getAclResource();
                    if (!$this->authorization->isAllowed($resource)) {
                        unset($options[$key]);
                    }
                }
            }
        }
        return $options;
    }
}
