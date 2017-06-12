<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   GPL V3.0+ See LICENSE.md
 */
namespace Chippyash\Attributes;

use Chippyash\Attributes\Exceptions\AttributesException;
use Chippyash\Type\String\StringType;

/**
 * Trait Attribution
 *
 * Trait implementing Attributal interface.
 * Declare the client class to use the Attributal interface if required
 */
trait Attribution
{
    /**
     * @var AttributeMap
     */
    protected $attributes;

    /**
     * Get an attribute
     *
     * @param StringType $name name of attribute
     *
     * @return Attribute
     *
     * @throws AttributesException Thrown if named attribute does not exists
     */
    public function getA(StringType $name)
    {
        if (!$this->hasAttribute($name)) {
            throw new AttributesException("Attribute: {$name} does not exist");
        }

        return $this->attributes[$name()];
    }

    /**
     * Set an attribute.  If it exists it will be replaced
     *
     * @param StringType $name Name of attribute to set
     * @param Attribute  $attribute Attribute to set
     *
     * @return Attribution
     */
    public function setA(StringType $name, Attribute $attribute)
    {
        if ($this->hasAttribute($name)) {
            $this->attributes = $this->attributes->filter(
                function ($val, $key) use ($name) {
                    return $key != $name();
                }
            );
        }

        $this->attributes = $this->attributes->append([$name() => $attribute]);

        return $this;
    }

    /**
     * @param StringType $name Name of attribute to check for
     *
     * @return bool
     */
    public function hasA(StringType $name)
    {
        return isset($this->attributes[$name()]);
    }
}