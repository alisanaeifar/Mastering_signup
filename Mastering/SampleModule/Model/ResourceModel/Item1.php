<?php
namespace Mastering\SampleModule\Model\ResourceModel;
class Item1 extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb{
    public function _construct(){
        $this->_init("mastering_sample_item","id");
    }
}
?>
