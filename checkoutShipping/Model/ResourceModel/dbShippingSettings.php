<?php
namespace Vendor\checkoutShipping\Model\ResourceModel;

class dbShippingSettings extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
public function _construct() {
        $this->_init('custom_shipping_settings', 'template_id');
}
}
