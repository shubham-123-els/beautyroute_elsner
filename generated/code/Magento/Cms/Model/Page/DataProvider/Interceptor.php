<?php
namespace Magento\Cms\Model\Page\DataProvider;

/**
 * Interceptor class for @see \Magento\Cms\Model\Page\DataProvider
 */
class Interceptor extends \Magento\Cms\Model\Page\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Cms\Model\ResourceModel\Page\CollectionFactory $pageCollectionFactory, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null, ?\Magento\Framework\AuthorizationInterface $auth = null, ?\Magento\Framework\App\RequestInterface $request = null, ?\Magento\Cms\Model\Page\CustomLayoutManagerInterface $customLayoutManager = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $pageCollectionFactory, $dataPersistor, $meta, $data, $pool, $auth, $request, $customLayoutManager);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMeta(array $meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMeta');
        return $pluginInfo ? $this->___callPlugins('prepareMeta', func_get_args(), $pluginInfo) : parent::prepareMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
