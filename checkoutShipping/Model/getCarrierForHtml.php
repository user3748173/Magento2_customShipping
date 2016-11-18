<?php

namespace Vendor\checkoutShipping\Model;

class getCarrierForHtml {

    public function __construct(
            \Vendor\checkoutShipping\Model\dbShippingSettings $dbShippingSettingsFactory, 
            \Vendor\checkoutShipping\Model\ResourceModel\dbShippingSettings\CollectionFactory $dbShippingSettingsCollection) {
        $this->_dbShippingSettingsFactory = $dbShippingSettingsFactory;
        $this->_dbShippingSettingsCollection = $dbShippingSettingsCollection;
    }

    public function getSetingsFromDb($value) {
        
        $product = $this->_dbShippingSettingsCollection->create()
                ->addFieldToFilter('html_id_name', $value);
        $cat_det = $product->getData();
        if ($cat_det) {
            $cat_det=$cat_det['0']['shipping_html'];
            return $cat_det;
        } else {
            return null;
        }
    }
}
