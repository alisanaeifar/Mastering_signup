<?php

namespace Signup\RezaModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Signup\RezaModule\Model\Config;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $rezaConfig;

    public function __construct(Config $myConfig, Context $context)
    {
        parent::__construct($context);

        $this->rezaConfig = $myConfig;
    }
    public function execute()
    {
        if ($this->rezaConfig->isEnabled()) {
            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        } else {
            $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
            $result->setContents('this page deleted by admin!');
            return $result;
        }
    }
}
