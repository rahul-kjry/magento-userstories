<?php
namespace Rahul\MessageBlock\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class Index extends Action
{
    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    public function execute()
    {
        echo "Admin Controller - Hello World!";
        exit;
    }
}
