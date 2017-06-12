<?php
/**
 * Freetimers Web Application Framework
 *
 * @author    Ashley Kitson
 * @copyright Freetimers Communications Ltd, 2017, UK
 * @license   Proprietary See LICENSE.md
 */
namespace Test\Chippyash\Attributes;

use Chippyash\Attributes\Attribute;
use Chippyash\Type\String\StringType;
use Test\Chippyash\Stub\StubAttribution;

class AttributionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * System Under Test
     *
     * @var StubAttribution
     */
    protected $sut;

    protected function setUp()
    {
        $this->sut = new StubAttribution(
            [
                'foo' => new Attribute('bar'),
                'bee' => new Attribute('bop')
            ]
        );
    }

    public function testYouCanRetrieveAnAttribute()
    {
        $this->assertEquals('bar', $this->sut->getA(new StringType('foo'))->value());
    }

    public function testYouCanTestForAnAttributePresence()
    {
        $this->assertTrue($this->sut->hasA(new StringType('bee')));
        $this->assertFalse($this->sut->hasA(new StringType('unknown')));
    }

    /**
     * @expectedException \Chippyash\Attributes\Exceptions\AttributesException
     * @expectedExceptionMessage Attribute: unknown does not exist
     */
    public function testGettingANonExistantAttributeWillThrowAnException()
    {
        $this->sut->getA(new StringType('unknown'));
    }
}
