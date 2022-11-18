<?php
namespace Mconnect\Iconlib\Block\Adminhtml\Iconlib\Edit\Tab;

use Magento\Backend\Block\Widget\Grid;
use Magento\Backend\Block\Widget\Grid\Column;
use Magento\Backend\Block\Widget\Grid\Extended;

class Products extends \Magento\Backend\Block\Widget\Grid\Extended
{
    protected $_productCollectionFactory;

    protected $registry;
    
    protected $_productfileFactory;

    protected $_objectManager = null;
    
    protected $_productfileproductCollection;
 
    public function __construct
	(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
		\Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $piiCollection,
        array $data = []
    )	{
			$this->_productCollectionFactory = $productCollectionFactory;
			$this->_piiCollection = $piiCollection;
			$this->_objectManager = $objectManager;
			$this->registry = $registry;
			parent::__construct($context, $backendHelper, $data);
		}

    protected function _construct()
    {
        parent::_construct();
        $this->setId('productsGrid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('DESC');
        $this->setSaveParametersInSession(true);
        $this->setUseAjax(true);
        if ($this->getRequest()->getParam('rule_id'))
		{
            $this->setDefaultFilter(['in_product' => 1]);
        }
    }

    protected function _addColumnFilterToCollection($column)
    {
        if ($column->getId() == 'in_product')
		{
            $productIds = $this->_getSelectedProducts();

				if (empty($productIds))
				{
					$productIds = 0;
				}
					if ($column->getFilter()->getValue())
					{
						$this->getCollection()->addFieldToFilter('entity_id', ['in' => $productIds]);
					}
					else 
					{
						if ($productIds)
						{
							$this->getCollection()->addFieldToFilter('entity_id', ['nin' => $productIds]);
						}
					}
        } 
		else 
		{
            parent::_addColumnFilterToCollection($column);
        }
			return $this;
    }

    protected function _prepareCollection()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('name');
        $collection->addAttributeToSelect('sku');
        $collection->addAttributeToSelect('price');
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }
	
    protected function _prepareColumns()
    {
        $this->addColumn(
            'in_product',
            [
                'type' => 'checkbox',
                'name' => 'in_product',
                'align' => 'center',
                'index' => 'entity_id',
                'values' => $this->_getSelectedProducts(),
                'header_css_class' => 'col-select',
                'column_css_class' => 'col-select'
                    
            ]
        );
        $this->addColumn(
            'entity_id',
            [
                'header' => __('ID'),
                'type' => 'number',
                'index' => 'entity_id',
                'header_css_class' => 'col-id',
                'column_css_class' => 'col-id',
            ]
        );
        $this->addColumn(
            'name',
            [
                'header' => __('Name'),
                'index' => 'name',
                'class' => 'xxx',
                'width' => '50px',
            ]
        );
        $this->addColumn(
            'sku',
            [
                'header' => __('Sku'),
                'index' => 'sku',
                'class' => 'xxx',
                'width' => '50px',
            ]
        );
        $this->addColumn(
            'price',
            [
                'header' => __('Price'),
                'type' => 'currency',
                'index' => 'price',
                'width' => '50px',
            ]
        );
        return parent::_prepareColumns();
    }
	
    public function getGridUrl()
    {
        return $this->getUrl('*/*/products', ['_current' => true]);
    }

    public function getRowUrl($row)
    {
        return '';
    }
	
    protected function _getSelectedProducts()
    {
        $contact = $this->getContact();
        return  $contact;
    }
	
    public function getSelectedProducts()
    {
        $contact = $this->getContact();
        return $contact;
    }
	
    protected function getContact()
    {
        $product = [];
        $tmpProducts = $this->getRequest()->getParam('product_id');
		
			if (isset($tmpProducts) && is_array($tmpProducts))
			{
				return $tmpProducts;
			}
				$id = $this->getRequest()->getParam('id');
				if (!empty($id))
				{
					$piiCollection = $this->_piiCollection->create();
					$piiCollection->addFieldToFilter('selected_icon', $id);				
					$oldProducts = (array) $piiCollection->getColumnValues('product_id');
					return $oldProducts;
				}
					return [];
		
        
    }
	
	public function canShowTab()
	{
		return true;
	}
	
	public function isHidden()
	{
		return true;
	}
}
