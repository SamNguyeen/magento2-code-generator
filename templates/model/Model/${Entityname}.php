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

namespace ${Vendorname}\${Modulename}\Model;

use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

class ${Entityname} extends AbstractModel
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = '${modulename}_${entityname}';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(\${Vendorname}\${Modulename}\Model\ResourceModel\${Entityname}::class);
    }
}
