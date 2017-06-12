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

interface Attributal
{
    /**
     * @param StringType $name name of attribute
     *
     * @return Attribute
     *
     * @throws AttributesException Thrown if named attribute does not exists
     */
    public function getA(StringType $name);

    /**
     * Set an attribute.  If it exists it will be replaced
     *
     * @param StringType $name Name of attribute to set
     * @param Attribute  $attribute Attribute to set
     *
     * @return Attribution
     */
    public function setA(StringType $name, Attribute $attribute);

    /**
     * @param StringType $name Name of attribute to check for
     *
     * @return bool
     */
    public function hasA(StringType $name);
}