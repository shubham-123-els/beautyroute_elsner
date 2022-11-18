<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */

declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Model;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    /**
     * Construct
     *
     * Data constructor.
     * @param Context $context
     */
    public function __construct(Context $context)
    {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context);
    }

    /**
     * Comment of isEnabled function
     *
     * @return boolean
     */
    public function isEnabled()
    {
        $active = $this->scopeConfig->getValue('speedbooster/general/active', ScopeInterface::SCOPE_STORE);
        if ($active) {
            return true;
        }
        return false;
    }
}
