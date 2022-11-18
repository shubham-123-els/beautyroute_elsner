<?php
namespace Magento\Review\Block\Product\ReviewRenderer;

/**
 * Interceptor class for @see \Magento\Review\Block\Product\ReviewRenderer
 */
class Interceptor extends \Magento\Review\Block\Product\ReviewRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Review\Model\ReviewFactory $reviewFactory, array $data = [], ?\Magento\Review\Model\ReviewSummaryFactory $reviewSummaryFactory = null)
    {
        $this->___init();
        parent::__construct($context, $reviewFactory, $data, $reviewSummaryFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getReviewsSummaryHtml(\Magento\Catalog\Model\Product $product, $templateType = 'default', $displayIfNoReviews = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReviewsSummaryHtml');
        return $pluginInfo ? $this->___callPlugins('getReviewsSummaryHtml', func_get_args(), $pluginInfo) : parent::getReviewsSummaryHtml($product, $templateType, $displayIfNoReviews);
    }
}
