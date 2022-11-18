<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\ProductGridInline\Plugin\Backend\Sparsh\ProductLabel\Model\Product\Attribute\Backend;

use Magento\Framework\App\RequestInterface;

class FilePlugin
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * FilePlugin constructor.
     * @param RequestInterface $request
     */
    public function __construct(
        RequestInterface $request
    ) {
        $this->request = $request;
    }

    /**
     * @param $subject
     * @param callable $proceed
     * @param $object
     * @return mixed
     */
    public function aroundAfterSave($subject, callable $proceed, $object)
    {
        $result = null;
        if ($this->request->getModuleName() != 'mfproductgrid') {
            $result = $proceed();
        }
        return $result;
    }
}
