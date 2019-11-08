<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Post;

use Magento\Framework\Controller\ResultFactory;

class Show extends \Magento\Backend\App\Action
{
    public function execute()
    {
        /** @var \Magento\Framework\Controller\Result\Raw  $result */
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('display');
        return $result;
    }
}
