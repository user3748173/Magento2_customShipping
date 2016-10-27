<?php

namespace Vendor\checkoutShipping\Controller\Index;

class Htmlcreator extends \Magento\Framework\App\Action\Action{

    public function __construct(
    \Magento\Framework\Model\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory) {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute() {
        $result = $this->resultJsonFactory->create();
        if ($this->getRequest()->isAjax()) {
            $test = '<h1>Tere</h1>';
            return $result->setData($test);
        }
    }

}
