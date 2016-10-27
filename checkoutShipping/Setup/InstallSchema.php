<?php

namespace Vendor\checkoutShipping\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface {

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) {
        $installer = $setup;
        $installer->startSetup();
        $shippingHtmlName = $installer->getTable('custom_shipping_settings');
        if ($installer->getConnection()->isTableExists($shippingHtmlName) != true) {
            $shippingHtmlTable = $installer->getConnection()
                    ->newTable($shippingHtmlName)
                    ->addColumn('template_id', Table::TYPE_INTEGER, null, ['identity' => true, 'unsigned' => true, 'nullable' => false, 'primary' => true], 'Primary Key')
                    ->addColumn('html_id_name', Table::TYPE_TEXT, 100, ['nullable' => false, 'default' => ''], 'html id')
                    ->addColumn('shipping_html', Table::TYPE_TEXT, '2M', ['nullable' => false, 'default' => ''], 'carrier')
                    ->setComment('Shipping HTML')
                    ->setOption('type', 'InnoDB')
                    ->setOption('charset', 'utf8');
            $installer->getConnection()->createTable($shippingHtmlTable);
        }
        $installer->endSetup();
    }

}
