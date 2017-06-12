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
use Test\Chippyash\Stub\StubAttributionSettable;

class AttributionSettableTest extends \PHPUnit_Framework_TestCase
{
    /**
     * System Under Test
     *
     * @var StubAttributionSettable
     */
    protected $sut;

    protected function setUp()
    {
        $this->sut = new StubAttributionSettable(
            [
                'bee' => new Attribute('bop')
            ]
        );
    }

    public function testYouCanSetAnAttribute()
    {
        $this->assertEquals(
            'bar',
            $this->sut->setA(new StringType('foo'), new Attribute('bar'))
            ->getA(new StringType('foo'))->value());
    }

    public function testSettingAnExistingAttributeWillReplaceIt()
    {
        $this->sut->setA(new StringType('foo'), new Attribute('bar'));
        $this->sut->setA(new StringType('foo'), new Attribute('bop'));

        $this->assertEquals('bop', $this->sut->getA(new StringType('foo'))->value());
        $this->assertEquals('bop', $this->sut->getA(new StringType('bee'))->value());
    }
}
