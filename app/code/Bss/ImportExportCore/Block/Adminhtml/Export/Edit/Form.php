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
namespace Bss\ImportExportCore\Block\Adminhtml\Export\Edit;

use Magento\Framework\AuthorizationInterface;

/**
 * Class Form
 *
 * @package Bss\ImportExportCore\Block\Adminhtml\Export\Edit
 */
class Form extends \Magento\Backend\Block\Widget\Form\Generic
{
    /**
     * @var \Magento\ImportExport\Model\Export\Entity\Factory
     */
    protected $entityFactory;

    /**
     * @var \Magento\ImportExport\Model\Source\Export\EntityFactory
     */
    protected $sourceEntityFactory;

    /**
     * @var \Magento\ImportExport\Model\Source\Export\FormatFactory
     */
    protected $formatFactory;

    /**
     * @var \Magento\ImportExport\Model\Export\ConfigInterface
     */
    protected $exportConfig;

    /**
     * @var AuthorizationInterface
     */
    private $authorization;

    /**
     * Form constructor.
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Data\FormFactory $formFactory
     * @param \Magento\ImportExport\Model\Export\Entity\Factory $entityFactory
     * @param \Magento\ImportExport\Model\Source\Export\EntityFactory $sourceEntityFactory
     * @param \Magento\ImportExport\Model\Source\Export\FormatFactory $formatFactory
     * @param \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig
     * @param AuthorizationInterface $authorization
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Data\FormFactory $formFactory,
        \Magento\ImportExport\Model\Export\Entity\Factory $entityFactory,
        \Magento\ImportExport\Model\Source\Export\EntityFactory $sourceEntityFactory,
        \Magento\ImportExport\Model\Source\Export\FormatFactory $formatFactory,
        \Magento\ImportExport\Model\Export\ConfigInterface $exportConfig,
        AuthorizationInterface $authorization,
        array $data = []
    ) {
        $this->entityFactory = $entityFactory;
        $this->sourceEntityFactory = $sourceEntityFactory;
        $this->formatFactory = $formatFactory;
        $this->exportConfig = $exportConfig;
        $this->authorization = $authorization;
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * Prepare form
     *
     * @return \Magento\Backend\Block\Widget\Form\Generic
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create(
            [
                'data' => [
                    'id' => 'edit_form',
                    'action' => $this->getUrl('*/*/export'),
                    'method' => 'post',
                ],
            ]
        );

        $fieldset = $form->addFieldset('base_fieldset', ['legend' => __('Export Settings')]);
        $fieldset->addField(
            'entity',
            'select',
            [
                'name' => 'entity',
                'title' => __('Entity Type'),
                'label' => __('Entity Type'),
                'required' => false,
                'onchange' => 'varienExport.getFilter();',
                'values' => $this->getEntityOptions(),
                'note' => '<div style="display:none;" id="bss-version"><span>'.__("Version").'</span>: <span id="bss-version-number">*</span></div>'
            ]
        );
        $fieldset->addField(
            'file_format',
            'select',
            [
                'name' => 'file_format',
                'title' => __('Export File Format'),
                'label' => __('Export File Format'),
                'required' => false,
                'values' => $this->formatFactory->create()->toOptionArray()
            ]
        );

        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * @return array
     */
    protected function getEntityOptions()
    {
        $options = $this->sourceEntityFactory->create()->toOptionArray();
        $exportEntities = $this->exportConfig->getEntities();
        foreach ($options as $key => $entityOption) {
            if (!empty($entityOption['value']) && !empty($exportEntities[$entityOption['value']])) {
                $entityModel = $exportEntities[$entityOption['value']]['model'];
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
