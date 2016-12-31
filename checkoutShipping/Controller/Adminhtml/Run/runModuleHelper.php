<?php
namespace Vendor\checkoutShipping\Controller\Adminhtml\Run;
class runModuleHelper extends \Magento\Backend\App\AbstractAction{
    protected $_messageManager;
    public function __construct(
    \Vendor\checkoutShipping\Model\getCarrierForHtml $getCarrierForHtml, 
            \Magento\Backend\App\Action\Context $context) {
        $this->_messageManager = $context->getMessageManager();
        parent::__construct($context);
        $this->_getCarrierForHtml = $getCarrierForHtml;
                $this->_logger = $loggerInterface;
    }

    public function execute() {
        $this->_getCarrierForHtml->getSetingsFromDb("freeshipping");
        $this->_messageManager->addSuccess('OK');
        $this->_redirect($this->_redirect->getRefererUrl());
    }
}
