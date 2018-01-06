<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ACCMQ\CanadaPost\Model\Source;

class Generic implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var \Magento\Fedex\Model\Carrier
     */
    protected $_shippingFedex;

    /**
     * Carrier code
     *
     * @var string
     */
    protected $_code = '';

    /**
     * @param \Magento\Fedex\Model\Carrier $shippingFedex
     */
    public function __construct(\ACCMQ\CanadaPost\Model\Carrier $shippingFedex)
    {
        $this->_shippingFedex = $shippingFedex;
    }

    /**
     * Returns array to be used in multiselect on back-end
     *
     * @return array
     */
    public function toOptionArray()
    {
        $configData = $this->_shippingFedex->getCode($this->_code);
        $arr = [];
        foreach ($configData as $code => $title) {
            $arr[] = ['value' => $code, 'label' => $title];
        }
        return $arr;
    }
}
