<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Convertor;

use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;
use WebPConvert\Convert\Exceptions\ConversionFailed\InvalidInput\InvalidImageTypeException;
use WebPConvert\Convert\Exceptions\ConversionFailedException;
use Elsnertech\SpeedBooster\Convertor\ConvertorInterface;
use Elsnertech\SpeedBooster\Exception\ConvertorException;
use Elsnertech\SpeedBooster\Image\TargetImageFactory;
use Elsnertech\SpeedBooster\Util\File;
use Elsnertech\SpeedBooster\Image\Image;
use Elsnertech\SpeedBooster\Image\ImageFactory;
use Elsnertech\SpeedBooster\Config\Config;
use Elsnertech\SpeedBooster\Exception\InvalidConvertorException;
use WebPConvert\Exceptions\InvalidInput\InvalidImageTypeException as InvalidInputImageTypeException;
use WebPConvert\Exceptions\InvalidInputException;

class Convertor implements ConvertorInterface
{
    /**
     * @var Config
     */
    private $config;

    /**
     * @var File
     */
    private $imageFile;

    /**
     * @var ConvertWrapper
     */
    private $convertWrapper;

    /**
     * @var TargetImageFactory
     */
    private $targetImageFactory;

    /**
     * Convertor constructor.
     * @param Config $config
     * @param File $imageFile
     * @param ConvertWrapper $convertWrapper
     * @param TargetImageFactory $targetImageFactory
     */
    public function __construct(
        Config $config,
        File $imageFile,
        ConvertWrapper $convertWrapper,
        TargetImageFactory $targetImageFactory
    ) {
        $this->config = $config;
        $this->imageFile = $imageFile;
        $this->convertWrapper = $convertWrapper;
        $this->targetImageFactory = $targetImageFactory;
    }

    /**
     * Convert Image
     *
     * @param Image $image
     * @return Image
     * @throws ConvertorException
     * @throws FileSystemException
     * @throws NoSuchEntityException
     */
    public function convertImage(Image $image): Image
    {
        if (!$this->config->enabled()) {
            throw new ConvertorException('WebP conversion is not enabled');
        }

        $webpImage = $this->targetImageFactory->create($image, 'webp');
        $result = $this->convert($image->getPath(), $webpImage->getPath());

        if (!$result && !$this->imageFile->fileExists($webpImage->getPath())) {
            throw new ConvertorException('WebP path "' . $webpImage->getPath() . '" does not exist after conversion');
        }

        return $webpImage;
    }

    /**
     * Convert
     *
     * @param string $sourceImagePath
     * @param string $targetImagePath
     * @return bool
     * @throws ConvertorException
     */
    private function convert(string $sourceImagePath, string $targetImagePath): bool
    {
        if (!$this->imageFile->fileExists($sourceImagePath)) {
            throw new ConvertorException('Source cached image does not exists: ' . $sourceImagePath);
        }

        if (!$this->imageFile->needsConversion($sourceImagePath, $targetImagePath)) {
            return true;
        }

        if (!$this->config->enabled()) {
            throw new ConvertorException('WebP conversion is not enabled');
        }

        try {
            $this->convertWrapper->convert($sourceImagePath, $targetImagePath);
        } catch (InvalidImageTypeException | InvalidInputException | InvalidInputImageTypeException $e) {
            return false;
        } catch (ConversionFailedException | InvalidConvertorException $e) {
            throw new ConvertorException($targetImagePath . ': ' . $e->getMessage());
        }

        return true;
    }
}
