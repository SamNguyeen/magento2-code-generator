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
namespace ${Vendorname}\${Modulename}\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ${Entityname} extends AbstractDb
{
    protected $_idFieldName = '${entityname}_id';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('${vendorname}_${modulename}_${entityname}', $this->_idFieldName);
    }
}
