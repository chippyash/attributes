<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   BSD-3-Clause See LICENSE.md
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
     * @param StringType $name Name of attribute to check for
     *
     * @return bool
     */
    public function hasA(StringType $name);
}