<?php
/**
 * Monadic Attributes
 *
 * @author    Ashley Kitson
 * @copyright Ashley Kitson, 2017, UK
 * @license   BSD-3-Clause See LICENSE.md
 */
namespace Test\Chippyash\Attributes;


use Chippyash\Attributes\Attribute;

class AttributeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * System Under Test
     *
     * @var Attribute
     */
    protected $sut;

    protected function setUp()
    {
        $this->sut = new Attribute('foo');
    }

    public function testAttributeIsMonadic()
    {
        $this->assertInstanceOf('Monad\Monadic', $this->sut);
    }

    public function testYouCanRetrieveTheAttributeValue()
    {
        $this->assertEquals('foo', $this->sut->value());
    }
}
