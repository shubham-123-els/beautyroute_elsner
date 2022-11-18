<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Convertor;

use WebPConvert\Convert\Exceptions\ConversionFailed\InvalidInput\InvalidImageTypeException;
use WebPConvert\Convert\Exceptions\ConversionFailedException;
use WebPConvert\WebPConvert;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Exception\InvalidConvertorException;

/**
 * Class ConvertWrapper to wrap third party wrapper for purpose of preference overrides and testing
 */
class ConvertWrapper
{
    /**
     * @var Config
     */
    private $config;

    /**
     * ConvertWrapper constructor.
     * @param Config $config
     */
    public function __construct(
        Config $config
    ) {
        $this->config = $config;
    }

    /**
     * Convert
     *
     * @param string $sourceImageFilename
     * @param string $destinationImageFilename
     * @throws ConversionFailedException
     * @throws InvalidConvertorException
     * @throws InvalidImageTypeException
     */
    public function convert(string $sourceImageFilename, string $destinationImageFilename): void
    {
        WebPConvert::convert($sourceImageFilename, $destinationImageFilename, $this->getOptions());
    }

    /**
     * Get Options
     *
     * @return array
     * @throws InvalidConvertorException
     */
    public function getOptions(): array
    {
        return [
            'quality' => 'auto',
            'max-quality' => $this->config->getQualityLevel(),
            'converters' => $this->config->getConvertors(),
            'encoding' => $this->config->getEncoding(),
        ];
    }
}
