<?php
/**
 * @category    magento2-pimcore5-bridge
 * @date        12/10/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */

namespace Divante\MagentoIntegrationBundle\Event\Model;

use Pimcore\Model\DataObject\AbstractObject;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class IntegratedMappedObjectEvent
 * @package Divante\MagentoIntegrationBundle\Event\Model
 */
class IntegratedMappedObjectEvent extends Event
{
    /**
     * IntegratedMappedObjectEvent constructor.
     * @param \stdClass      $object
     * @param AbstractObject $originObject
     */
    public function __construct(
        protected \stdClass $object,
        /** @var  */
        protected AbstractObject $originObject
    )
    {
    }

    /**
     * @return mixed
     */
    public function getOriginObject()
    {
        return $this->originObject;
    }

    /**
     * @param mixed $originObject
     */
    public function setOriginObject($originObject): void
    {
        $this->originObject = $originObject;
    }

    public function getObject(): \stdClass
    {
        return $this->object;
    }

    public function setObject(\stdClass $object): void
    {
        $this->object = $object;
    }

}
