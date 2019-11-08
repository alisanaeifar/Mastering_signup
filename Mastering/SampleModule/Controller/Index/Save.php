<?php


//namespace Vendor\Module\Controller\Index;
namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Mastering\SampleModule\Model\Item1;

class Save extends \Magento\Framework\App\Action\Action
{
    protected $model;
    protected $date;
//    protected $customermodel;

    public function __construct(
        Context $context,
        Item1 $model,
        \Magento\Framework\Stdlib\DateTime\DateTime $date
    )
    {
        $this->model = $model;
        $this->date = $date;
        parent::__construct($context);
    }

    public function execute()
    {
        $query['name'] = $this->getRequest()->getPostValue("name");

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

//namespace Mastering\SampleModule\Controller\Index;
//
//use Mastering\SampleModule\Model\Item1;
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\App\Action\Context;
//
//class Save extends \Magento\Framework\App\Action\Action
//{
//    protected $_dataExample;
//    protected $resultRedirect;
//
//    public function __construct(\Magento\Framework\App\Action\Context $context,
//                                \Mastering\SampleModule\Model\Item $dataExample,
//                                \Magento\Framework\Controller\ResultFactory $result)
//    {
////        die("ok");
//        parent::__construct($context);
//        $this->_dataExample = $dataExample;
//        $this->resultRedirect = $result;
//    }
//
//    public function execute()
//    {
//        $post= (array) $this->getRequest()->getPost();
////        print_r($post);
////        echo 'ok';
////        die($post['name']);
//
//        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
//
//        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
//
//        $model = $this->_dataExample->create();
//        $model->addData([
//            'name' =>  $post['name']
//        ]);
//
//        $saveData = $model->save();
//        if ($saveData) {
//            $this->messageManager->addSuccess(__('Insert Record Successfully !'));
//        }
//        return $resultRedirect;
//    }
//}
