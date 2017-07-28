<?php
/**
 * installSchema.php
 *
 * @copyright Copyright © ${commentsYear} ${CommentsCompanyName}. All rights reserved.
 * @author    ${commentsUserEmail}
 */
namespace ${Vendorname}\${Modulename}\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

/**
 * @codeCoverageIgnore
 */
class InstallSchema implements InstallSchemaInterface
{
    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context) //@codingStandardsIgnoreLine
    {
        $setup->startSetup();

        /**
         * Create table '${vendorname}_${modulename}_${simpleentityname}'
         */
        $table = $setup->getConnection()->newTable(
            $setup->getTable('${vendorname}_${modulename}_${simpleentityname}')
        )->addColumn(
            'id',
            Table::TYPE_SMALLINT,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            '${Simpleentityname} ID'
        )->addColumn(
            'identifier',
            Table::TYPE_TEXT,
            100,
            ['nullable' => false],
            '${Simpleentityname} Identifier'
        )->addIndex(
            $setup->getIdxName(
                $setup->getTable('${vendorname}_${modulename}_${simpleentityname}'),
                ['identifier'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['identifier'],
            ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
        )->setComment(
            '${Simpleentityname} Table'
        );

        // Add more columns here

        $setup->getConnection()->createTable($table);

        $setup->endSetup();
    }
}
