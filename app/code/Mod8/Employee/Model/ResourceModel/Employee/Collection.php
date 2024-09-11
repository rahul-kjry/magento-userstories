<?php
namespace Mod8\Employee\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Mod8\Employee\Model\Employee', 'Mod8\Employee\Model\ResourceModel\Employee');
    }
}
