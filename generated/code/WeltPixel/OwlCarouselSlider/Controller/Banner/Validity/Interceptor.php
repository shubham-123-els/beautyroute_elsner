<?php
namespace WeltPixel\OwlCarouselSlider\Controller\Banner\Validity;

/**
 * Interceptor class for @see \WeltPixel\OwlCarouselSlider\Controller\Banner\Validity
 */
class Interceptor extends \WeltPixel\OwlCarouselSlider\Controller\Banner\Validity implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \WeltPixel\OwlCarouselSlider\Model\Slider $sliderModel, \WeltPixel\OwlCarouselSlider\Helper\Custom $owlHelper)
    {
        $this->___init();
        parent::__construct($context, $sliderModel, $owlHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
