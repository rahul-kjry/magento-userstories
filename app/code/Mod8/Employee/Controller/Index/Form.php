<?php
namespace Mod8\Employee\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Mod8\Employee\Model\EmployeeFactory;

class Form extends Action
{
    protected $employeeFactory;

    public function __construct(Context $context, EmployeeFactory $employeeFactory)
    {
        parent::__construct($context);
        $this->employeeFactory = $employeeFactory;
    }

    public function execute()
    {
        $post = $this->getRequest()->getPostValue();
        if ($post) {
            $employee = $this->employeeFactory->create();
            $employee->setData($post);
            $employee->save();
            $this->messageManager->addSuccessMessage(__('Employee data saved successfully.'));
            return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('*/*/form');
        }
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
