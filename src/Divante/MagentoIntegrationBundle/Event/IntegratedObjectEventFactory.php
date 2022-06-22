<?php
/**
 * @category    magento2-pimcore5-bridge
 * @date        19/09/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */

namespace Divante\MagentoIntegrationBundle\Event;

use Divante\MagentoIntegrationBundle\Helper\IntegrationHelper;
use Divante\MagentoIntegrationBundle\Model\DataObject\IntegrationConfiguration;
use Divante\MagentoIntegrationBundle\Model\Event\IntegratedObjectEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Delete\AssetDeleteEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Delete\CategoryDeleteEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Delete\ProductDeleteEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Update\AssetUpdateEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Update\CategoryUpdateEvent;
use Divante\MagentoIntegrationBundle\Model\Event\Update\ProductUpdateEvent;
use Pimcore\Model\Element\AbstractElement;

/**
 * Class IntegratedObjectEventFactory
 * @package Divante\MagentoIntegrationBundle\Event
 */
class IntegratedObjectEventFactory
{

    public const DELETE_EVENT_TYPE = 1;
    public const UPDATE_EVENT_TYPE = 2;

    /**
     * @param AbstractElement          $object
     * @param mixed                    $type
     * @return IntegratedObjectEvent
     */
    public function createEvent(
        AbstractElement $object,
        IntegrationConfiguration $configuration,
        $type
    ): IntegratedObjectEvent {
        return match ($type) {
            self::UPDATE_EVENT_TYPE => $this->createUpdateEvent($object, $configuration),
            self::DELETE_EVENT_TYPE => $this->createDeleteEvent($object, $configuration),
            default => throw new \InvalidArgumentException('Unspported event type given'),
        };
    }

    /**
     * @param AbstractElement          $object
     * @return IntegratedObjectEvent
     */
    protected function createDeleteEvent(AbstractElement $object, IntegrationConfiguration $configuration): IntegratedObjectEvent
    {
        return match ($configuration->getConnectionType($object)) {
            IntegrationHelper::IS_PRODUCT => new ProductDeleteEvent($object, $configuration),
            IntegrationHelper::IS_CATEGORY => new CategoryDeleteEvent($object, $configuration),
            IntegrationHelper::IS_ASSET => new AssetDeleteEvent($object, $configuration),
            default => throw new \InvalidArgumentException('Object is not integrated'),
        };
    }

    /**
     * @param AbstractElement          $object
     * @return IntegratedObjectEvent
     */
    protected function createUpdateEvent(AbstractElement $object, IntegrationConfiguration $configuration): IntegratedObjectEvent
    {
        return match ($configuration->getConnectionType($object)) {
            IntegrationHelper::IS_PRODUCT => new ProductUpdateEvent($object, $configuration),
            IntegrationHelper::IS_CATEGORY => new CategoryUpdateEvent($object, $configuration),
            IntegrationHelper::IS_ASSET => new AssetUpdateEvent($object, $configuration),
            default => throw new \InvalidArgumentException('Object is not integrated'),
        };
    }
}
