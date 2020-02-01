<?php
/**
 * Copyright © 2020 Magenest. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Magenest_${CommentsCompanyName} extension
 * NOTICE OF LICENSE
 *
 * @category Magenest
 * @package Magenest_${CommentsCompanyName}
 */
namespace ${Vendorname}\${Modulename}\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\DB\Adapter\AdapterInterface;

class ${Entityname}SchemaSetupPatch implements \Magento\Framework\Setup\Patch\SchemaPatchInterface, \Magento\Framework\Setup\Patch\PatchRevertableInterface
{
    private $schemaSetup;

    /**
     * SampleeSchemaSetupPatch constructor.
     *
     * @param \Magento\Framework\Setup\SchemaSetupInterface $schemaSetup
     */
    public function __construct(
        \Magento\Framework\Setup\SchemaSetupInterface $schemaSetup
    ) {
        $this->schemaSetup = $schemaSetup;
    }

    /**
     * @inheritDoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @return \Magento\Framework\Setup\Patch\SchemaPatchInterface|void
     * @throws \Zend_Db_Exception
     */
    public function apply()
    {
        $this->schemaSetup->startSetup();

        /**
         * Create table '${vendorname}_${modulename}_${entityname}'
         */
        $table = $this->schemaSetup->getConnection()->newTable(
            $this->schemaSetup->getTable('${vendorname}_${modulename}_${entityname}')
        )->addColumn(
            'entity_id',
            Table::TYPE_SMALLINT,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            '${Entityname} ID'
        )->addColumn(
            'identifier',
            Table::TYPE_TEXT,
            100,
            ['nullable' => false],
            '${Entityname} Identifier'
        )->addIndex(
            $this->schemaSetup->getIdxName(
                $this->schemaSetup->getTable('${vendorname}_${modulename}_${entityname}'),
                ['identifier'],
                AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            ['identifier'],
            ['type' => AdapterInterface::INDEX_TYPE_FULLTEXT]
        )->setComment(
            '${Entityname} Table'
        );

        // Add more columns here

        $this->schemaSetup->getConnection()->createTable($table);

        $this->schemaSetup->endSetup();
    }

    /**
     * @inheritDoc
     */
    public function revert()
    {
        $this->schemaSetup->startSetup();

        if ($this->schemaSetup->tableExists('${vendorname}_${modulename}_${entityname}')) {
            $this->schemaSetup->getConnection()->dropTable($this->schemaSetup->getTable('${vendorname}_${modulename}_${entityname}'));
        }

        $this->schemaSetup->endSetup();
    }
}