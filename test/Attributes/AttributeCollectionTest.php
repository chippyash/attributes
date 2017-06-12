<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   GPL V3.0+ See LICENSE.md
 */
namespace Test\Chippyash\Attributes;


use Chippyash\Attributes\AttributeMap;

class AttributeCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \RuntimeException
     * @expectedExceptionMessage Value foo is not a \Chippyash\Attributes\Attribute
     */
    public function testConstructingAnAttributeCollectionWithNonAttributesWillThrowAnException()
    {
        new AttributeMap(['foo' => new \stdClass()]);
    }

}
