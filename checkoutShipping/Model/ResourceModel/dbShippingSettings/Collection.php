<?php

namespace Vendor\checkoutShipping\Model\ResourceModel\dbShippingSettings;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct() {
        $this->_init('Vendor\checkoutShipping\Model\dbShippingSettings', 'Vendor\checkoutShipping\Model\ResourceModel\dbShippingSettings');
    }

}
