<?php
/**
 * @category    pimcore5-module-magento2-integration
 * @date        15/03/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */

namespace Divante\MagentoIntegrationBundle\Helper;

/**
 * Class IntegrationHelper
 * @package Divante\MagentoIntegrationBundle\Helper
 */
class IntegrationHelper
{
    public const IS_PRODUCT = 1;
    public const IS_CATEGORY = 2;
    public const IS_ASSET = 3;
    public const OBJECT_TYPE_PRODUCT = 'product';
    public const OBJECT_TYPE_CATEGORY = 'category';
    public const SYNC_PROPERTY_NAME = 'synchronize-status';
    public const SYNC_STATUS_SENT = 'SENT';
    public const SYNC_STATUS_OK = 'SUCCESS';
    public const SYNC_STATUS_ERROR = 'ERROR';
    public const SYNC_STATUS_DELETE = 'DELETED';
    public const INTEGRATION_CONFIGURATION_MANDATORY_FIELDS_PRODUCT = [
        'name',
        'sku',
        'visibility',
        'is_active_in_pim',
        'url_key',
        'category_ids'
    ];
    public const INTEGRATION_CONFIGURATION_MANDATORY_FIELDS_CATEGORY = [
        'name',
        'url_key'
    ];
    public const DEFAULT_MAGENTO_STORE = 0;
    public const INTEGRATED_OBJECT_DELETE_EVENT_NAME = 'magento_integration.object.delete';
    public const INTEGRATED_OBJECT_PRE_DELETE_EVENT_NAME = 'magento_integration.object.pre-delete';
    public const INTEGRATED_OBJECT_PRE_UPADTE_EVENT_NAME = 'magento_integration.object.pre-update';
    public const INTEGRATED_OBJECT_UPADTE_EVENT_NAME = 'magento_integration.object.update';
    public const PRODUCT_TYPE_CONFIGURABLE_ATTRIBUTE = 'configurable_attributes';
    public const PRODUCT_TYPE_CONFIGURABLE = 'configurable';
}
