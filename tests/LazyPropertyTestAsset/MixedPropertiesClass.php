<?php

declare(strict_types=1);

namespace LazyPropertyTestAsset;

use LazyProperty\HasLazyProperties;

/**
 * Mixed properties test asset
 */
class MixedPropertiesClass
{
    use HasLazyProperties;

    public ?string $public1       = null;
    public ?string $public2       = null;
    protected ?string $protected1 = null;
    protected ?string $protected2 = null;
    private ?string $private1     = null;
    private ?string $private2     = null;

    public function getProperty(string $propertyName) : ?string
    {
        return $this->$propertyName;
    }

    /**
     * @param string[] $properties
     */
    public function initProperties(array $properties) : void
    {
        $this->initLazyProperties($properties);
    }

    private function getPrivate1() : string
    {
        return $this->private1 = 'private1';
    }

    private function getPrivate2() : string
    {
        return $this->private2 = 'private2';
    }

    protected function getProtected1() : string
    {
        return $this->protected1 = 'protected1';
    }

    protected function getProtected2() : string
    {
        return $this->protected2 = 'protected2';
    }

    public function getPublic1() : string
    {
        return $this->public1 = 'public1';
    }

    public function getPublic2() : string
    {
        return $this->public2 = 'public2';
    }
}
