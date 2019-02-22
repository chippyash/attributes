<?php
namespace Test\Chippyash\Stub;

use Chippyash\Attributes\AttributeMap;
use Chippyash\Attributes\Attribution;
use Chippyash\Attributes\AttributionSettable;

/**
 * Stub class to test AttributionSettable Trait
 */
class StubAttributionSettable
{
    use Attribution;
    use AttributionSettable;

    public function __construct(array $attributes)
    {
        $this->attributes = new AttributeMap(
            $attributes
        );
    }
}