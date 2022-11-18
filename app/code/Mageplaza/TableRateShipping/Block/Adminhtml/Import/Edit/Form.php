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

namespace Mageplaza\TableRateShipping\Block\Adminhtml\Import\Edit;

use Magento\Backend\Block\Widget\Form\Generic;
use Magento\Framework\Exception\LocalizedException;
use Magento\ImportExport\Model\Import;

/**
 * Class Form
 * @package Mageplaza\TableRateShipping\Block\Adminhtml\Import\Edit
 */
class Form extends Generic
{
    /**
     * @return Generic
     * @throws LocalizedException
     */
    protected function _prepareForm()
    {
        /** @var \Magento\Framework\Data\Form $form */
        $form = $this->_formFactory->create([
            'data' => [
                'id'      => 'mp-csv-form-edit',
                'action'  => $this->getUrl('mptablerate/import/process', ['form_key' => $this->getFormKey()]),
                'method'  => 'post',
                'enctype' => 'multipart/form-data',
            ],
        ]);

        $fieldset['upload'] = $form->addFieldset('upload_file_fieldset', ['legend' => __('File to Import')]);
        $fieldset['upload']->addField(Import::FIELD_NAME_SOURCE_FILE, 'file', [
            'name'               => Import::FIELD_NAME_SOURCE_FILE,
            'label'              => __('Select File'),
            'title'              => __('Select File'),
            'required'           => true,
            'class'              => 'input-file',
            'after_element_html' => $this->_getDownloadSampleFileHtml(),
        ]);

        $form->setUseContainer(true);
        $this->setForm($form);

        return parent::_prepareForm();
    }

    /**
     * Get download sample file html
     *
     * @return string
     */
    protected function _getDownloadSampleFileHtml()
    {
        $downloadUrl = 'https://drive.google.com/drive/folders/1-Ejlfws9E4AyUCTlvBCxchoUP-1ddQPw';

        return sprintf('<span><a href="%s" target="_blank">%s</a></span>', $downloadUrl, __('Download Sample File'));
    }
}
