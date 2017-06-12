<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   GPL V3.0+ See LICENSE.md
 */
namespace Test\Chippyash\Attributes;

use Chippyash\Attributes\Attribute;
use Chippyash\Attributes\AttributeMap;

class AttributeMapTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Value foo is not a \Chippyash\Attributes\Attribute
     */
    public function testConstructingAnAttributeMapWithNonAttributesWillThrowAnException()
    {
        new AttributeMap(['foo' => new \stdClass()]);
    }

    public function testYouShouldConstructAnAttributeMapWithAttributes()
    {
        $sut = new AttributeMap(
            [
                'foo' => new Attribute('bar')
            ]
        );

        $this->assertInstanceOf('Chippyash\Attributes\AttributeMap', $sut);
    }
}
