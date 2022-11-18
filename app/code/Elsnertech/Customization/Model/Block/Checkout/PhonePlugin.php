<?php
namespace Elsnertech\Customization\Model\Block\Checkout;
use Magento\Checkout\Block\Checkout\AttributeMerger;
class PhonePlugin
{
    /**
     * @param AttributeMerger $subject
     * @param $result
     * @return mixed
     */
    public function afterMerge(AttributeMerger $subject, $result)
    {
        $result['postcode']['validation'] = [
            'required-entry'  => false,
            'max_text_length' => 7,
            'validate-number' => true
        ];
        $result['telephone']['validation'] = [
            'required-entry'  => true,
            'max_text_length' => 10,
            'validate-number' => true
        ];

        return $result;
    }
}