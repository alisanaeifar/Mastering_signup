<?php

namespace Signup\RezaModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $setup->getConnection()->insert(
            $setup->getTable('signup_rezamodule_item'),
            [
                'name' => 'order 1'
            ]
        );

        $setup->getConnection()->insert(
            $setup->getTable('signup_rezamodule_item'),
            [
                'name' => 'order 2'
            ]
        );

        $setup->endSetup();
    }
}
