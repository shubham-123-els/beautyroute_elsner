<?php
namespace MageArray\Customeractivation\Block\Customer\Adminhtml\Edit;

use MageArray\Customeractivation\Helper\Data as DataHelper;
use Magento\Backend\Block\Widget\Context;
use Magento\Customer\Block\Adminhtml\Edit\GenericButton;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class ApproveButton
 * @package MageArray\Customeractivation\Block\Customer\Adminhtml\Edit
 */
class ApproveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @var DataHelper
     */
    private $dataHelper;

    /**
     * ApproveButton constructor.
     * @param Context $context
     * @param Registry $registry
     * @param DataHelper $dataHelper
     */
    public function __construct(
        Context $context,
        Registry $registry,
        DataHelper $dataHelper
    ) {
        parent::__construct($context, $registry);
        $this->dataHelper = $dataHelper;
    }

    /**
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->dataHelper->isActive() && $this->getCustomerId()) {
            $value = $this->dataHelper
                ->getAttributeValue($this->getCustomerId());
            $data = [
                'label' => __(($value) ? 'Disapprove' : 'Approve'),
                'class' => 'approve-customer',
                'on_click' => sprintf(
                    "location.href = '%s';",
                    $this->getUnlockUrl()
                ),
                'sort_order' => 50,
            ];
        }

        return $data;
    }

    /**
     * Returns customer unlock action URL
     *
     * @return string
     */
    protected function getUnlockUrl()
    {
        return $this->getUrl(
            'customeractivation/customer/changeStatus',
            ['customer_id' => $this->getCustomerId()]
        );
    }
}
