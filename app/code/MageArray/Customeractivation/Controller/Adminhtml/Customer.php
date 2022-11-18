<?php
namespace MageArray\Customeractivation\Controller\Adminhtml;

use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Backend\App\Action;

/**
 * Class Customer
 * @package MageArray\Customeractivation\Controller\Adminhtml
 */
abstract class Customer extends Action
{
    /**
     * Customer constructor.
     * @param Action\Context $context
     * @param DataHelper $dataHelper
     */
    public function __construct(
        Action\Context $context,
        DataHelper $dataHelper
    ) {
        parent::__construct($context);
        $this->datahelper = $dataHelper;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('MageArray_Customeractivation::customeractivation');
    }
}
