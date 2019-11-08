<?php

namespace Signup\RezaModule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Signup\RezaModule\Model\Item1;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $model;
    protected $date;

    public function __construct(
        Context $context,
        Item1 $model,
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    ) {
        $this->model = $model;
        $this->date = $date;
        parent::__construct($context);
    }

    public function execute()
    {
        $query['name'] = $this->getRequest()->getPostValue('name');
        if ($query) {
            $this->model->setData($query);
            $this->model->Save();
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addSuccess(__('You submitted your Signup successfully.'));
            return $redirect;
        } else {
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addError(__('Failed To Submit  Please Provide Valid Data.'));
            return $redirect;
        }
    }
}
