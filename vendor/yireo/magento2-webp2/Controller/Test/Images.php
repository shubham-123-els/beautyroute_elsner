<?php
declare(strict_types=1);

namespace Yireo\Webp2\Controller\Test;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

class Images extends Action
{
    /**
     * @var PageFactory
     */
    protected $pageFactory;

    /**
     * Index constructor.
     *
     * @param Context     $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * @return Page
     */
    public function execute()
    {
        $page = $this->pageFactory->create();

        $case = strtolower((string)$this->_request->getParam('case'));
        $case = preg_replace('/([^a-z\_]+)/', '', $case);
        $handle = 'webp_test_images_' . $case;
        $page->addHandle($handle);

        return $page;
    }
}
