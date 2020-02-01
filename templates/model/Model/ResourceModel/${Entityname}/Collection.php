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
namespace ${Vendorname}\${Modulename}\Model\ResourceModel\${Entityname};

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = '${entityname}_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\${Vendorname}\${Modulename}\Model\${Entityname}::class, \${Vendorname}\${Modulename}\Model\ResourceModel\${Entityname}::class);
    }
}
