<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Ashley Kitson
 * @copyright Freetimers Communications Ltd, 2017, UK
 * @license   Proprietary See LICENSE.md
 */
namespace Test\Chippyash\Stub;

use Chippyash\Attributes\AttributeMap;
use Chippyash\Attributes\Attribution;

/**
 * Stub class to test Attribution Trait
 */
class StubAttribution
{
    use Attribution;

    public function __construct(array $attributes)
    {
        $this->attributes = new AttributeMap(
            $attributes
        );
    }
}