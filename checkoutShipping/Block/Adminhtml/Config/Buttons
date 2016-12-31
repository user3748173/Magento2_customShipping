<?php
namespace Vendor\checkoutShipping\Block\Adminhtml\Config\Buttons;
class Htmlcreator extends \Magento\Config\Block\System\Config\Form\Field{
   protected $_buttonLabel = 'Helper';
   
   public function setButtonLabel($buttonLabel){
        $this->_buttonLabel = $buttonLabel;
        return $this;
    }
    
    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element){
        $url = $this->_urlBuilder->getUrl('magento_checkoutshipping/run/runModuleHelper');

        return $this->getLayout()
            ->createBlock('Magento\Backend\Block\Widget\Button')
            ->setType('button')
            ->setLabel(__($this->_buttonLabel))
            ->setOnClick("window.location.href='" . $url . "'")
            ->toHtml();
    }
}
