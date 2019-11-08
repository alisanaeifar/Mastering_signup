<?php
namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Mastering\SampleModule\Model\Config;
class Index extends \Magento\Framework\App\Action\Action
{
     protected $jafar;

    public function __construct(Config $aliConfig, Context $context)
    {
        parent::__construct($context);

        $this->jafar=$aliConfig;
    }
//
    public function execute()
    {
        if ($this->jafar->isEnabled()){

            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        }
        else
        {

            $result = $this->resultFactory->create(
                ResultFactory::TYPE_RAW
            );
            $result->setContents('this page was deleted by admin!');
            return $result;

        }
    }
}
//namespace Mastering\SampleModule\Controller\Index;
//
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\App\Action\Context;
//use Mastering\SampleModule\Model\Config;
////
//class Index extends \Magento\Framework\App\Action\Action
//{
//    public function indexAction()
//    {
//        $this->loadLayout();
//        $this->renderLayout();
//    }
//    public function saveAction(){
//        $data = $this->getRequest()->getPost();
//        $connection = Mage::getSingleton('core/resource')->getConnection('core_write');
//        $query = "INSERT INTO mastering_sample_item (`name`)
//        VALUES ('".$data['name']."')";
//        $connection->query($query);
//    }
//
//    protected $jafar;
//
//    public function __construct(Config $aliConfig, Context $context)
//    {
//        parent::__construct($context);
//
//        $this->jafar=$aliConfig;
//    }
////
//    public function execute()
//    {
//        if ($this->jafar->isEnabled()){
//
//            return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
//
//        }
//        else
//        {
//
//            $result = $this->resultFactory->create(
//                ResultFactory::TYPE_RAW
//            );
//            $result->setContents('this page was deleted by admin!');
//            return $result;
//
//        }
//    }
//}
//----------------------------------sample code___1
//namespace Mastering\SampleModule\Controller\Index;
//
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\App\Action\Context;
//use Mastering\SampleModule\Model\Item1;
//class Index extends \Magento\Framework\App\Action\Action
//{
//    protected $model;
//    protected $date;
//    protected $customermodel;
//
//    public function __construct(
//        Context $context,
//        Item1 $model,
//        \Magento\Framework\Stdlib\DateTime\DateTime $date
//    )
//    {
//        $this->model = $model;
//        $this->date = $date;
//        parent::__construct($context);
//    }
//
//    public function execute()
//    {
//        $query['name']=$this->getRequest()->getPostValue("customer_name");
//
//        if ($query){
//
//            $this->model->setData($query);
//            $this->model->Save();
//            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//            $redirect->setUrl($this->_redirect->getRefererUrl());
//            $this->messageManager->addSuccess(__('You submitted your Question successfully.'));
//            return $redirect;
//        }
//        else{
//            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
//            $redirect->setUrl($this->_redirect->getRefererUrl());
//            $this->messageManager->addError (__('Failed To Submit  Please Provide Valid Data.'));
//            return $redirect;
//        }
//    }
//}
//----------------------------------sample code___1


//namespace Mastering\SampleModule\Controller\Index;
//
//use Mastering\SampleModule\Model\Item1;
//use Magento\Framework\Controller\ResultFactory;
//use Magento\Framework\App\Action\Context;
//
//class Index extends \Magento\Framework\App\Action\Action
//{
//    protected $_dataExample;
//    protected $resultRedirect;
//
//    public function __construct(\Magento\Framework\App\Action\Context $context,
//                                \Mastering\SampleModule\Model\Item $dataExample,
//                                \Magento\Framework\Controller\ResultFactory $result)
//    {
//        parent::__construct($context);
//        $this->_dataExample = $dataExample;
//        $this->resultRedirect = $result;
//    }
//
//    public function execute()
//    {
//        $query['name']=$this->getRequest()->getPostValue("name");
//
//        $resultRedirect = $this->resultRedirect->create(ResultFactory::TYPE_REDIRECT);
//        $resultRedirect->setUrl($this->_redirect->getRefererUrl());
//        $model = $this->_dataExample->create();
//        $model->addData([
//            "name" =>  $query['name']
//        ]);
//        $saveData = $model->save();
//        if ($saveData) {
//            $this->messageManager->addSuccess(__('Insert Record Successfully !'));
//        }
//        return $resultRedirect;
//    }
//}
