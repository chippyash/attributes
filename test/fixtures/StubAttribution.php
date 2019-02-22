<?php
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