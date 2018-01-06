/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
    'uiComponent',
    'Magento_Checkout/js/model/shipping-rates-validator',
    'Magento_Checkout/js/model/shipping-rates-validation-rules',
    'ACCMQ_CanadaPost/js/model/shipping-rates-validator',
    'ACCMQ_CanadaPost/js/model/shipping-rates-validation-rules'
], function (
    Component,
    defaultShippingRatesValidator,
    defaultShippingRatesValidationRules,
    fedexShippingRatesValidator,
    fedexShippingRatesValidationRules
) {
    'use strict';

    defaultShippingRatesValidator.registerValidator('canadapost', fedexShippingRatesValidator);
    defaultShippingRatesValidationRules.registerRules('canadapost', fedexShippingRatesValidationRules);

    return Component;
});
