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

namespace Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Actions;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Gift
 * @package Mageplaza\FreeGifts\Controller\Adminhtml\Rule\Actions
 */
class Gift extends AbstractGrid
{
    /**
     * @return ResponseInterface|Raw|ResultInterface
     */
    public function execute()
    {
        $result = $this->getResultPage()->getLayout()->renderElement('content');

        return $this->getResultRaw()->setContents($result);
    }
}
