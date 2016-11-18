<?php

namespace Vendor\checkoutShipping\Controller\Index;

class Htmlcreator extends \Magento\Framework\App\Action\Action{

    public function __construct( 
        \Vendor\checkoutShipping\Model\getCarrierForHtml $getCarrierForHtml,
        \Magento\Framework\Model\Context $context, 
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory) {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
        $this->_getCarrierForHtml = $getCarrierForHtml;
    }

    public function execute() {
        $result = $this->resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) {
            $test = $this->getRequest()->getPost("ajax");
            $htmlData=$this->_getCarrierForHtml->getSetingsFromDb($test);
            return $result->setData($htmlData);
        }
    }

}
