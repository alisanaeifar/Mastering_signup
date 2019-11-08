<?php

namespace Signup\RezaModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable(
            $setup->getTable('signup_rezamodule_item')
        )->addColumn(
            'number',
            Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Item Id'
        )->addColumn(
            'firstname',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )->addIndex(
            $setup->getIdxName('signup_rezamodule_item', ['firstname']),
            ['firstname']
        )->setComment(
            'SampleItem'
        );
        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
