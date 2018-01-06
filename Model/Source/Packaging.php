<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

/**
 * Fedex packaging source implementation
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
namespace ACCMQ\CanadaPost\Model\Source;

class Packaging extends \ACCMQ\CanadaPost\Model\Source\Generic
{
    /**
     * Carrier code
     *
     * @var string
     */
    protected $_code = 'packaging';
}
