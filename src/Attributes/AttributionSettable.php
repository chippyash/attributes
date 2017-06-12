<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   GPL V3.0+ See LICENSE.md
 */
namespace Chippyash\Attributes;

use Chippyash\Type\String\StringType;

/**
 * Trait Attribution
 *
 * Trait implementing AttributalSettable interface.
 * Declare the client class to use the AttributalSettable interface if required
 */
trait AttributionSettable
{
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
        if ($this->hasA($name)) {
            $this->attributes = $this->attributes->kDiff(
                new AttributeMap([$name() => $attribute])
            );
        }

        $this->attributes = $this->attributes->append([$name() => $attribute]);

        return $this;
    }
}