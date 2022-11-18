<?php
/**
 * Get login customer data such as email,id,name etc
 */
namespace Kangaroorewards\Core\CustomerData;
use Magento\Customer\CustomerData\SectionSourceInterface;
/**
 * Class KangarooCustomer
 *
 * @package Kangaroorewards\Core\CustomerData
 */
class KangarooCustomer implements SectionSourceInterface
{
    private $_session;

    /**
     * KangarooCustomer constructor.
     *
     * @param \Magento\Customer\Model\Session $customerSession
     */
    public function __construct(
        \Magento\Customer\Model\Session $customerSession
    ) {
        $this->_session = $customerSession;
    }

    /**
     * Get customer data from session
     *
     * @return array
     */
    public function getSectionData()
    {
        $customer = $this->_session->getCustomer();

        return (
        [
            'logged_in' => $this->_session->isLoggedIn(),

            'customer' => [
                'id' => $customer->getId(),
                'email' => $customer->getEmail(),
                'name' => $customer->getName(),
            ]
        ]
        );
    }
}

