<?php
namespace Mod8\Employee\Model;

use Magento\Framework\Model\AbstractModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Mod8\Employee\Model\ResourceModel\Employee');
    }
}
