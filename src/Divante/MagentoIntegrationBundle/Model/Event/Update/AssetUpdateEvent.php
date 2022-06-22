<?php
/**
 * @category    magento2-pimcore5-bridge
 * @date        19/09/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */

namespace Divante\MagentoIntegrationBundle\Model\Event\Update;

use Divante\MagentoIntegrationBundle\Model\Event\IntegratedObjectEvent;

/**
 * Class AssetUpdateEvent
 * @package Divante\MagentoIntegrationBundle\Model\Event\Update
 */
class AssetUpdateEvent extends IntegratedObjectEvent
{
    public const NAME = 'magento_integration.asset.update';
}
