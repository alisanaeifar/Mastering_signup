<?php

namespace Signup\RezaModule\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('reza admin');
        return $result;
    }
}