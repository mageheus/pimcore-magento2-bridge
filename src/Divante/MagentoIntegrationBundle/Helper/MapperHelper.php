<?php
/**
 * @category    pimcore5-module-magento2-integration
 * @date        22/03/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */

namespace Divante\MagentoIntegrationBundle\Helper;

/**
 * Class MapperHelper
 * @package Divante\MagentoIntegrationBundle\Helper
 */
class MapperHelper
{
    public const OBJECT_TYPE_PRODUCT = 'product';
    public const OBJECT_TYPE_CATEGORY = 'category';
    public const TEXT_TYPES = ['input', 'numeric', 'country', 'language', 'calculatedValue'];
    public const TEXT_AREA_TYPES = ['textarea'];
    public const WYSIWYG_TYPES   = ['wysiwyg'];
    public const DATE_TYPES = ['date', 'datetime', 'time'];
    public const BOOL_TYPES = ['booleanSelect', 'checkbox'];
    public const SELECT_TYPES = ['select'];
    public const QUANTITY_VALUE_TYPES = ['inputQuantityValue', 'quantityValue'];
    public const OBJECT_TYPES = ['href', 'image', 'manyToOneRelation', 'manyToOneObjectRelation'];
    public const MULTI_OBJECT_TYPES = [
        'multihref',
        'imageGallery',
        'objects',
        'manyToManyRelation',
        'manyToManyObjectRelation'
    ];
    public const STRUCTURED_TYPES = [self::LOCALIZED_FIELD_TYPE];
    public const USER_TYPES = ['user'];
    public const IMAGE_TYPES = ['image', 'imageGallery'];
    public const MULTI_SELECT_TYPES = [
        'multiselect',
        'countrymultiselect',
        'languagemultiselect',
        'objectsMetadata',
        'multihrefMetadata'
    ];
    public const OBJECT_BRICKS_TYPE         = 'objectbricks';
    public const CLASSIFICATION_STORE_TYPE  = 'classificationstore';
    public const LOCALIZED_FIELD_TYPE = 'localizedfields';
    public const BLOCK_TYPES                = ['block'];
    public const OBJECT_BRICKS_TYPES        = [self::OBJECT_BRICKS_TYPE];
    public const CLASSIFICATION_STORE_TYPES = [self::CLASSIFICATION_STORE_TYPE];
}
