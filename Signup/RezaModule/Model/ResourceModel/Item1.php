<?php
namespace Signup\RezaModule\Model\ResourceModel;

class Item1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('signup_rezamodule_item', 'id');
    }
}
