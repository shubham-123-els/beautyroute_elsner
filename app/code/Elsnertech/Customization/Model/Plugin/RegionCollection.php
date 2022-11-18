<?php 

namespace Elsnertech\Customization\Model\Plugin;


class RegionCollection
{
    protected $disallowed = [
        'Alaska',
        'Armed Forces Africa',
        'Armed Forces Africa',
        'Armed Forces Americas',
        'Armed Forces Americas',
        'Armed Forces Canada',
        'Armed Forces Canada',
        'Armed Forces Europe',
        'Armed Forces Europe',
        'Armed Forces Middle East',
        'Armed Forces Middle East',
        'Armed Forces Pacific',
        'American Samoa',
        'Federated States Of Micronesia',
        'Guam',
        'Hawaii',
        'Marshall Islands',
        'Northern Mariana Islands',
        'Palau',
        'Puerto Rico',
        'Virgin Islands',
        'Puerto Rico'
    ];

    public function afterToOptionArray($subject, $options)
    {
        // echo "string";die;
        $result = array_filter($options, function ($option) {
            if (isset($option['label']))
                return !in_array($option['label'], $this->disallowed);
            return true;
        });

        return $result;
    }
}