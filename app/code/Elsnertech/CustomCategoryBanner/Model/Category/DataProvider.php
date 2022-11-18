<?php
namespace Elsnertech\CustomCategoryBanner\Model\Category;
 
class DataProvider extends \Magento\Catalog\Model\Category\DataProvider
{
 
	protected function getFieldsMap()
	{
    	$fields = parent::getFieldsMap();
        $fields['content'][] = 'category_image_banner'; // custom image field
    	
    	return $fields;
	}
}
