<?php

namespace Magiccart\Shopbrand\Block;

use Magento\Framework\App\Filesystem\DirectoryList;

class ListBrand extends Brand implements \Magento\Framework\DataObject\IdentityInterface
{
    const DEFAULT_CACHE_TAG = 'MAGICCART_BRAND_LIST';

    protected function _construct()
    {
        $data = $this->_helper->getConfigModule('list_page_settings');
        //$dataConvert = array('infinite', 'vertical', 'autoplay', 'centerMode');
        if($data['slide']){
            $data['vertical-Swiping'] = $data['vertical'];
            $breakpoints = $this->getResponsiveBreakpoints();
            $responsive = '[';
            $num = count($breakpoints);
            foreach ($breakpoints as $size => $opt) {
                $item = (int) $data[$opt];
                $responsive .= '{"breakpoint": '.$size.', "settings": {"slidesToShow": '.$item.'}}';
                $num--;
                if($num) $responsive .= ', ';
            }
            $responsive .= ']';
            $data['slides-To-Show'] = $data['visible'];
            $data['autoplay-Speed'] = $data['autoplay_speed'];
            $data['swipe-To-Slide'] = 'true';
            $data['responsive'] = $responsive;
        }

        // $data['selector'] = 'alo-slider'.md5(rand());
        $this->addData($data);

        parent::_construct();

    }

    protected function getCacheLifetime()
    {
        return parent::getCacheLifetime() ?: 86400;
    }

    public function getCacheKeyInfo()
    {
        $keyInfo     =  parent::getCacheKeyInfo();
        $id = $this->getRequest()->getParam('keyword');
        $key = $this->_storeManager->getStore()->getStoreId();
        if($id)  $key = $key .'-'. $id;
        $keyInfo[]   =  $key;
        return $keyInfo;
    }

    /**
     * @return array
     */
    public function getIdentities()
    {
        $keyword = $this->getRequest()->getParam('keyword');
        $key = $this->_storeManager->getStore()->getStoreId();
        if($keyword)  $key = $key . '-'. $keyword;
        return [self::DEFAULT_CACHE_TAG, self::DEFAULT_CACHE_TAG . '_' . $key];
    }

    protected function _prepareLayout()
    {
        if ($breadcrumbs = $this->getLayout()->getBlock('breadcrumbs')) {
            $breadcrumbs->addCrumb('home', [
                'label' => __('Home'),
                'title' => __('Go to Home Page'),
                'link'  => $this->_storeManager->getStore()->getBaseUrl()
            ])
                ->addCrumb('brand', $this->getBreadcrumbsData());
        }
        if ($catId = $this->getRequest()->getParam('id')) {
            $model = $this->_shopbrandFactory->create();
            $name = $model->load($catId)->getData('title');
            $breadcrumbs->addCrumb($name, [
                'label' => $name,
                'title' => $name
            ]);
        }

        return parent::_prepareLayout();
    }

    /**
     * @return array
     */
    protected function getBreadcrumbsData()
    {
        $data = [
            'label' => 'Brand',
            'title' => 'Brand'
        ];
        $data['link'] =  $this->_helper->getBrandUrl();

        return $data;
    }

    public function getBrands()
    {
        $keyword = $this->getRequest()->getParam('keyword');
        $keyword = $this->getCharaters($keyword);
        if (count($keyword)>1) {
            $collection = $this->_shopbrandFactory->create()->getCollection();
            if($keyword){

                if (count($keyword)=="3") {
                    $a1 = array(
                        array('attribute'=>'title', 'like'=>$keyword[0].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[1].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[2].'%')
                    );
                }

                elseif(count($keyword)=="4") {
                    $a1 = array(
                        array('attribute'=>'title', 'like'=>$keyword[0].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[1].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[2].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[3].'%')
                    );
                } else {
                    $a1 = array(
                        array('attribute'=>'title', 'like'=>$keyword[0].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[1].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[2].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[3].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[4].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[5].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[6].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[7].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[8].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[9].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[10].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[11].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[12].'%'),
                        array('attribute'=>'title', 'like'=>$keyword[13].'%'),
                    );
                }



                $collection->addFieldToFilter('title',$a1)->addFieldToFilter('status', 1);
                $collection->setOrder('title','ASC'); 
            }   
            return $collection;

        } else {

            $collection = $this->_shopbrandFactory->create()->getCollection();
            if($keyword){
                $collection->addFieldToFilter('title',['like'=>implode(" ",$keyword).'%'])
                            ->addFieldToFilter('status', 1);
                $collection->setOrder('title','ASC');
            }
            return $collection;
        }
    }

    public function getCharaters($keyword)
    {
        if($keyword=="a-c"){
            $keyword = array("a","b","c");
            return $keyword;
        } elseif($keyword=="d-g"){
            $keyword = array("d","e","f","g");
            return $keyword;
        } elseif($keyword=="h-k"){
            $keyword = array("h","i","j","k");
            return $keyword;
        } elseif($keyword=="l-n"){
            $keyword = array("l","m","n");
            return $keyword;
        } elseif($keyword=="o-r"){
            $keyword = array("o","p","q","r");
            return $keyword;
        } elseif($keyword=="s-v"){
            $keyword = array("s","t","u","v");
            return $keyword;
        } elseif($keyword=="w-9"){
            $keyword = array("w","x","y","z","0","1","2","3","4","5","6","7","8","9");
            return $keyword;
        } else{
            $keyword = explode(" ",$keyword);
            return $keyword;
        }
    }

    public function getBrand()
    {
        $brandId = $this->getRequest()->getParam('id');
        if(!$brandId) return;
        return $this->_shopbrandFactory->create()->load($brandId);
    }

    /**
     * @return number
     */    
    public function getProductCount(\Magiccart\Shopbrand\Model\Shopbrand $brand)
    {
        $collection = $brand->getProductCollection();
        return $collection->count();
    }
}
