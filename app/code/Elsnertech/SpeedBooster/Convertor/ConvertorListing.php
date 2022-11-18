<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Convertor;

class ConvertorListing
{
    /**
     * @var ConvertorInterface[]
     */
    private $convertors = [];

    /**
     * ConvertorListing constructor.
     * @param ConvertorInterface[] $convertors
     */
    public function __construct(array $convertors = [])
    {
        foreach ($convertors as $convertor) {
            $this->addConvertor($convertor);
        }
    }

    /**
     * Add Convertor
     *
     * @param ConvertorInterface $convertor
     * @return void
     */
    public function addConvertor(ConvertorInterface $convertor)
    {
        $this->convertors[] = $convertor;
    }

    /**
     * Get Convertors
     *
     * @return ConvertorInterface[]
     */
    public function getConvertors(): array
    {
        return $this->convertors;
    }
}
