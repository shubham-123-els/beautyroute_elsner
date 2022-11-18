<?php
namespace Mconnect\Iconlib\Ui\DataProvider\Product\Modifier;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductLinkInterface;
use Magento\Catalog\Model\Locator\LocatorInterface;
use Magento\Eav\Api\AttributeSetRepositoryInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Phrase;
use Magento\Framework\UrlInterface;
use Magento\Ui\Component\DynamicRows;
use Magento\Ui\Component\Form\Element\DataType\Number;
use Magento\Ui\Component\Form\Element\DataType\Text;
use Magento\Ui\Component\Form\Element\DataType\Media;
use Magento\Ui\Component\Form\Element\Input;
use Magento\Ui\Component\Form\Element\MultiSelect;
use Magento\Ui\Component\Form\Field;
use Magento\Ui\Component\Form\Fieldset;
use Magento\Ui\Component\Modal;
use Magento\Ui\Component\Container;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Catalog\Helper\Image as ImageHelper;
use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;

class Iconlib extends AbstractModifier 
{
    const DATA_SCOPE = '';
    const DATA_SCOPE_IL = 'iconlib';
    const GROUP_ILTAB = 'iconlib';
	const DATA_SCOPE_IL_NEXT = 'iconlibnext';
    const GROUP_ILTAB_NEXT = 'iconlibnext';
	const CONTAINER_HEADER_NAME = 'custom_fieldset_content_header';
	
    /**
     * @var string
     */
    private static $previousGroup = 'search-engine-optimization';

    /**
     * @var int
     */
    private static $sortOrder = 90;

    /**
     * @var LocatorInterface
     */
    protected $locator;

    /**
     * @var UrlInterface
     */
    protected $urlBuilder;

    /**
     * @var ProductLinkRepositoryInterface
     */
    protected $productLinkRepository;

    /**
     * @var ImageHelper
     */
    protected $imageHelper;
	/**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var Status
     */
    protected $status;

    /**
     * @var AttributeSetRepositoryInterface
     */
    protected $attributeSetRepository;

    /**
     * @var string
     */
    protected $scopeName;

    /**
     * @var string
     */
    protected $scopePrefix;

    /**
     * @param LocatorInterface $locator
     * @param UrlInterface $urlBuilder
     * @param ProductLinkRepositoryInterface $productLinkRepository
     * @param ProductRepositoryInterface $productRepository
     * @param ImageHelper $imageHelper
     * @param Status $status
     * @param AttributeSetRepositoryInterface $attributeSetRepository
     * @param string $scopeName
     * @param string $scopePrefix
     */
    public function __construct
	(
		 LocatorInterface $locator,
         UrlInterface $urlBuilder,
         ImageHelper $imageHelper,
		 StoreManagerInterface $storeManager,
         Status $status,
         AttributeSetRepositoryInterface $attributeSetRepository,
		\Mconnect\Iconlib\Model\ResourceModel\Icon\CollectionFactory $ilCollection,
		\Mconnect\Iconlib\Model\ResourceModel\Imageicon\CollectionFactory $imageIconCollection,
         $scopeName = '',
         $scopePrefix = ''
    )
	{ 
        $this->locator = $locator;
        $this->urlBuilder = $urlBuilder;
        $this->imageHelper = $imageHelper;
		$this->storeManager = $storeManager;
        $this->status = $status;
        $this->attributeSetRepository = $attributeSetRepository;
		$this->_ilCollection = $ilCollection;
		$this->_imageIconCollection = $imageIconCollection;
        $this->scopeName = $scopeName;
        $this->scopePrefix = $scopePrefix;		
	 }

    /**
     * {@inheritdoc}
     */
    public function modifyMeta(array $meta)
    { 
        $meta = array_replace_recursive(
            $meta,
            [
                static::GROUP_ILTAB => [
                    'children' => [
                        $this->scopePrefix . static::DATA_SCOPE_IL => $this->getIconLibFieldset(),
                    ],
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'label' => __('Icon Lib'),
                                'collapsible' => true,
                                'componentType' => Fieldset::NAME,
                                'dataScope' => static::DATA_SCOPE,
                                'sortOrder' => 300,      
                            ],
                        ],
                    ],
                ],
            ]
        );
        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function modifyData(array $data)
    {
		$product = $this->locator->getProduct();
		$productId = $product->getId();
			if ( empty($productId) ) 
			{
				return $data;
			}
						$objectManager = \Magento\Framework\App\ObjectManager::getInstance(); 
						$request = $objectManager->get('Magento\Framework\App\Request\Http'); 
						$storeId =  $request->getParam('store', 0);
				$iiCollection = $this->_imageIconCollection->create();
				$iiCollection->addFieldToFilter('product_id',$productId);
				$iiCollection->addFieldToFilter('store_id',$storeId);
				$availableIcons = $iiCollection->getColumnValues('selected_icon');
				
				
				
			if($availableIcons)
			{
				$availableArray=$availableIcons;
				$ilCollection = $this->_ilCollection->create();		
				foreach ($this->getDataScopes() as $dataScope)
				{ 
					$data[$productId]['links'][$dataScope] = [];
					foreach ($ilCollection as $linkItem)
					{
						if(in_array($linkItem->getId(),$availableArray))
						{
							$data[$productId]['links'][$dataScope][] = $this->fillData($linkItem);				 
						}
					}	
				}
			}
			$data[$productId][self::DATA_SOURCE_DEFAULT]['current_product_id'] = $productId;
			$data[$productId][self::DATA_SOURCE_DEFAULT]['current_store_id'] = $this->locator->getStore()->getId();
				return $data;
		
    }    
    /**
     * Prepare data column
     *
     * @param ProductInterface $linkedProduct
     * @param ProductLinkInterface $linkItem
     * @return array
     */ 
    protected function fillData($linkItem)
    {
		return [
            'id' => $linkItem->getId(),            
            'icon_label' => $linkItem->getIconLabel(),            
			'icon_image' => $this->urlBuilder->getBaseUrl().'pub/media/'.$linkItem->getIconImage(), 
			'status' => $linkItem->getStatus() == 1 ? 'Enabled' : 'Disabled',	
        ];
    }
	
	/**
     * Retrieve grid
     *
     * @param string $scope
     * @return array
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function getGrid($scope)
    {
		$dataProvider = $scope.'_index_listing';
        return [
            'arguments' => [
                'data' => [
                    'config' => [
                        'additionalClasses' => 'admin__field-wide',
                        'componentType' => DynamicRows::NAME,
                        'label' => null,
                        'columnsHeader' => false,
                        'columnsHeaderAfterRender' => true,
                        'renderDefaultRecord' => false,
                        'template' => 'ui/dynamic-rows/templates/grid',
                        'component' => 'Magento_Ui/js/dynamic-rows/dynamic-rows-grid',
                        'addButton' => false,
                        'recordTemplate' => 'record',
                        'dataScope' => 'data.links',
                        'deleteButtonLabel' => __('Remove'),
                        'dataProvider' => $dataProvider,
                        'map' => [
                            'id' => 'id',
                            'icon_label' => 'icon_label',
                            'icon_image' => 'icon_image_src',
							'status' => 'status_text',
						
                        ],
                        'links' => [
                            'insertData' => '${ $.provider }:${ $.dataProvider }',
							'__disableTmpl' => ['insertData' => false],
                        ],
                        'sortOrder' => 2,
                    ],
                ],
            ],
            'children' => [
                'record' => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'componentType' => 'container',
                                'isTemplate' => true,
                                'is_collection' => true,
                                'component' => 'Magento_Ui/js/dynamic-rows/record',
                                'dataScope' => '',
                            ],
                        ],
                    ],
                    'children' => $this->fillMeta(),
                ],
            ],
        ];
    }
	
	 /**
     * Retrieve meta column
     *
     * @return array
     */
    protected function fillMeta()
    {
        return [
            'id' => $this->getTextColumn('id', false, __('ID'), 0),            
            'icon_label' => $this->getTextColumn('icon_label', false, __('Icon Label'), 20),
			'icon_image' => [
                'arguments' => [
                    'data' => [
                        'config' => [
                            'componentType' => Field::NAME,
                            'formElement' => Input::NAME,
                            'elementTmpl' => 'ui/dynamic-rows/cells/thumbnail',
                            'dataType' => Text::NAME,
                            'dataScope' => 'icon_image',
                            'fit' => true,
                            'label' => __('Icon Image'),
                            'sortOrder' => 30,
                        ],
                    ],
                ],
            ],
			'status' => $this->getTextColumn('status', true, __('Status'), 40),
            'actionDelete' => [
                'arguments' => [
                    'data' => [
                        'config' => [
                            'additionalClasses' => 'data-grid-actions-cell',
                            'componentType' => 'actionDelete',
                            'dataType' => Text::NAME,
                            'label' => __('Actions'),
                            'sortOrder' => 70,
                            'fit' => true,
                        ],
                    ],
                ],
            ],            
        ];
    }

    /**
     * Retrieve text column structure
     *
     * @param string $dataScope
     * @param bool $fit
     * @param Phrase $label
     * @param int $sortOrder
     * @return array
     */
    protected function getTextColumn($dataScope, $fit, Phrase $label, $sortOrder)
    {
        $column = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'componentType' => Field::NAME,
                        'formElement' => Input::NAME,
                        'elementTmpl' => 'ui/dynamic-rows/cells/text',
                        'component' => 'Magento_Ui/js/form/element/text',
                        'dataType' => Text::NAME,
                        'dataScope' => $dataScope,
                        'fit' => $fit,
                        'label' => $label,
                        'sortOrder' => $sortOrder,
                    ],
                ],
            ],
        ];
        return $column;
    }
	 protected function getImagetColumn($dataScope, $fit, Phrase $label, $sortOrder)
    {
        $column = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'componentType' => Field::NAME,
                        'formElement' => Input::NAME,
                        'elementTmpl' => 'ui/dynamic-rows/cells/text',
                        'component' => 'Magento_Ui/js/grid/columns/thumbnail',
                        'dataType' => Text::NAME,
                        'dataScope' => $dataScope,
                        'fit' => $fit,
                        'label' => $label,
                        'sortOrder' => $sortOrder,
                    ],
                ],
            ],
        ];
        return $column;
    }
	
    /**
     * Retrieve all data scopes
     *
     * @return array
     */
    protected function getDataScopes()
    {
        return [
            static::DATA_SCOPE_IL,
        ];
    }

    /**
     * Prepares config for the Related products fieldset
     *
     * @return array
     */
    protected function getIconLibFieldset()
    {
        $content = __(
            'Add Icon Lib in this Product ? Click on "Add Icon Lib" button, and Select Icon Lib.'
        );
        return [
            'children' => [
                'button_set' => $this->getButtonSet(
                    $content,
                    __('Add Icon'),
                    $this->scopePrefix . static::DATA_SCOPE_IL
                ),
                'modal' => $this->getGenericModal(
                    __('Add Icon'),
                    $this->scopePrefix . static::DATA_SCOPE_IL
                ),				
                static::DATA_SCOPE_IL => $this->getGrid($this->scopePrefix . static::DATA_SCOPE_IL),
				
            ],
            'arguments' => [
                'data' => [
                    'config' => [
                        'additionalClasses' => 'admin__fieldset-section',
                        'label' => __('Icon Lib'),
                        'collapsible' => false,
                        'componentType' => Fieldset::NAME,
                        'dataScope' => '',
                        'sortOrder' => 10,
                    ],
                ],
            ]
        ];
    }
	protected function getButtonSet(Phrase $content, Phrase $buttonTitle, $scope)
    {
		$modalTarget ='product_form.product_form.iconlib.iconlib.modal';
		$buttonTitle='Add Icon';
		$scope='iconlib';
        return [
            'arguments' => [
                'data' => [
                    'config' => [
                        'formElement' => 'container',
                        'componentType' => 'container',
                        'label' => false,
                        'content' => $content,
                        'template' => 'ui/form/components/complex',
						'additionalClasses' => 'mcsfileupload-grid',
                    ],
                ],
            ],
            'children' => [
                'button_' . $scope => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'formElement' => 'container',
                                'componentType' => 'container',
                                'component' => 'Magento_Ui/js/form/components/button',
                                'actions' => [
                                    [
                                        'targetName' => $modalTarget,
                                        'actionName' => 'toggleModal',
                                    ],
                                    [
                                        'targetName' => $modalTarget . '.' . $scope . '_index_listing',
                                        'actionName' => 'render',
                                    ]
                                ],
                                'title' => $buttonTitle,
                                'provider' => null,
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
	protected function getGenericModal(Phrase $title, $scope)
    {
		$listingTarget = $scope.'_index_listing';
        $modal = [
            'arguments' => [
                'data' => [
                    'config' => [
                        'componentType' => Modal::NAME,
                        'dataScope' => '',
                        'options' => [
                            'title' => $title,
                            'buttons' => [
                                [
                                    'text' => __('Cancel'),
                                    'actions' => [
                                        'closeModal'
                                    ]
                                ],
                                [
                                    'text' => __('Add Selected Icons'),
                                    'class' => 'action-primary',
                                    'actions' => [
                                        [
                                            'targetName' => 'index = ' . $listingTarget,
                                            'actionName' => 'save'
                                        ],
                                        'closeModal'
                                    ]
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'children' => [
                $listingTarget => [
                    'arguments' => [
                        'data' => [
                            'config' => [
                                'autoRender' => false,
                                'componentType' => 'insertListing',
                                'dataScope' => $listingTarget,
                                'externalProvider' => $listingTarget .'.'.$listingTarget.'_data_source',
                                'selectionsProvider' => $listingTarget.'.' .$listingTarget.'.iconlib_columns.ids',
                                'ns' => $listingTarget,
                                'render_url' => $this->urlBuilder->getUrl('mui/index/render'),
                                'realTimeLink' => true,
                                'dataLinks' => [
                                    'imports' => false,
                                    'exports' => true
                                ],
                                'behaviourType' => 'simple',
                                'externalFilterMode' => true,
                                'imports' => [
                                    'productId' => '${ $.provider }:data.product.current_product_id',
                                    'storeId' => '${ $.provider }:data.product.current_store_id',
                                ],
                                'exports' => [
                                    'productId' => '${ $.externalProvider }:params.current_product_id',
                                    'storeId' => '${ $.externalProvider }:params.current_store_id',
                                ]
                            ],
                        ],
                    ],
                ],
            ],
        ];
        return $modal;
    }
}