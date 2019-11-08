<?php
namespace Mastering\SampleModule\Model;
class Item1 extends \Magento\Framework\Model\AbstractModel{
    public function _construct(){
        $this->_init(\Mastering\SampleModule\Model\ResourceModel\Item1::class);
    }
}
?>
