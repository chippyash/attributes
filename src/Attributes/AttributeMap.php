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
use Monad\Map;

/**
 * A Map of Attribute
 */
class AttributeMap extends Map
{
    /**
     * AttributeMap constructor.
     *
     * @param array $value Array must be associative if supplied
     *
     * @throws AttributesException
     */
    public function __construct(array $value = [])
    {
        parent::__construct($value, '\Chippyash\Attributes\Attribute');
    }
}