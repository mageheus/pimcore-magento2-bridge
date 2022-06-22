<?php
/**
 * @category    pimcore5-module-magento2-integration
 * @date        19/04/2018
 * @author      Michał Bolka <mbolka@divante.co>
 * @copyright   Copyright (c) 2018 DIVANTE (https://divante.co)
 */
namespace Divante\MagentoIntegrationBundle\Model\Mapping;

/**
 * Class FromColumn
 * @package Divante\MagentoIntegrationBundle\Model\Mapping
 */
class ToColumn extends FromColumn
{
    /**
     * @var string
     */
    public $type = "";

    /**
     * @var string
     */
    public $fieldtype = "";

    /**
     * @var array
     */
    public $config = [];

    /**
     * @var string
     */
    public $setter = "";

    /**
     * @var array
     */
    public $setterConfig = [];

    /**
     * @var string
     */
    public $interpreter = "";

    /**
     * @var array
     */
    public $interpreterConfig = [];

    /**
     * @var string
     */
    public $group = "";

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getFieldtype(): string
    {
        return $this->fieldtype;
    }

    /**
     * @param string $fieldtype
     */
    public function setFieldtype($fieldtype): void
    {
        $this->fieldtype = $fieldtype;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param array $config
     */
    public function setConfig($config): void
    {
        $this->config = $config;
    }

    public function getSetterConfig(): array
    {
        return $this->setterConfig;
    }

    /**
     * @param array $setterConfig
     */
    public function setSetterConfig($setterConfig): void
    {
        $this->setterConfig = $setterConfig;
    }

    public function getInterpreterConfig(): array
    {
        return $this->interpreterConfig;
    }

    /**
     * @param array $interpreterConfig
     */
    public function setInterpreterConfig($interpreterConfig): void
    {
        $this->interpreterConfig = $interpreterConfig;
    }

    public function getSetter(): string
    {
        return $this->setter;
    }

    /**
     * @param string $setter
     */
    public function setSetter($setter): void
    {
        $this->setter = $setter;
    }

    public function getInterpreter(): string
    {
        return $this->interpreter;
    }

    /**
     * @param string $interpreter
     */
    public function setInterpreter($interpreter): void
    {
        $this->interpreter = $interpreter;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }
}
