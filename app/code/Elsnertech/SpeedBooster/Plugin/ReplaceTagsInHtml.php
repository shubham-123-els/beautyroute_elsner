<?php
/**
 * @author Elsner Team
 * @copyright Copyright © Elsner Technologies Pvt. Ltd (https://www.elsner.com/)
 * @package Elsnertech_SpeedBooster
 */
declare(strict_types=1);

namespace Elsnertech\SpeedBooster\Plugin;

use Magento\Framework\View\LayoutInterface;
use Elsnertech\SpeedBooster\Util\HtmlReplacer;
use Elsnertech\SpeedBooster\Util\ShouldModifyOutput;

class ReplaceTagsInHtml
{
    /**
     * @var HtmlReplacer
     */
    private $htmlReplacer;

    /**
     * @var ShouldModifyOutput
     */
    private $shouldModifyOutput;
    
    /**
     * ReplaceTags constructor.
     *
     * @param HtmlReplacer $htmlReplacer
     * @param ShouldModifyOutput $shouldModifyOutput
     */
    public function __construct(
        HtmlReplacer $htmlReplacer,
        ShouldModifyOutput $shouldModifyOutput
    ) {
        $this->htmlReplacer = $htmlReplacer;
        $this->shouldModifyOutput = $shouldModifyOutput;
    }

    /**
     * Interceptor of getOutput()
     *
     * @param LayoutInterface $layout
     * @param string $output
     * @return string
     */
    public function afterGetOutput(LayoutInterface $layout, string $output): string
    {
        if ($this->shouldModifyOutput->shouldModifyOutput($layout) === false) {
            return $output;
        }

        return $this->htmlReplacer->replace($output);
    }
}
