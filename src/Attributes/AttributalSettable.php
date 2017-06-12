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
use Chippyash\Attributes\Exceptions\AttributesException;

/**
 * Interface AttributalSettable
 * Setting method for attributes
 */
interface AttributalSettable
{
    /**
     * Set an attribute.  If it exists it will be replaced
     *
     * @param StringType $name Name of attribute to set
     * @param Attribute  $attribute Attribute to set
     *
     * @return Attribution
     */
    public function setA(StringType $name, Attribute $attribute);
}