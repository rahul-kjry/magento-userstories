<?php
namespace Mod8\Employee\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Mod8\Employee\Model\ResourceModel\Employee\CollectionFactory;

class Index extends Action
{
    protected $collectionFactory;

    public function __construct(Context $context, CollectionFactory $collectionFactory)
    {
        parent::__construct($context);
        $this->collectionFactory = $collectionFactory;
    }

    public function execute()
    {
        $collection = $this->collectionFactory->create();
        $block = $this->_view->getLayout()->createBlock('Magento\Framework\View\Element\Template')->setTemplate('Mod8_Employee::table.phtml')->setData('collection', $collection);
        $this->_view->loadLayout();
        $this->_view->getLayout()->getBlock('content')->append($block);
        $this->_view->renderLayout();
    }
}
