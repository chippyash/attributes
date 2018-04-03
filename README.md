# chippyash/attributes

## Quality Assurance

![PHP 5.6](https://img.shields.io/badge/PHP-5.6-blue.svg)
![PHP 7](https://img.shields.io/badge/PHP-7-blue.svg)
[![Build Status](https://travis-ci.org/chippyash/attributes.svg?branch=master)](https://travis-ci.org/chippyash/attributes.svg?branch=master)
[![Test Coverage](https://codeclimate.com/github/chippyash/attributes/badges/coverage.svg)](https://codeclimate.com/github/chippyash/attributes/badges)
[![Code Climate](https://codeclimate.com/github/chippyash/attributes/badges/gpa.svg)](https://codeclimate.com/github/chippyash/attributes/badges)

The above badges represent the current development branch.  As a rule, I don't push
 to GitHub unless tests, coverage and usability are acceptable.  This may not be
 true for short periods of time; on holiday, need code for some other downstream
 project etc.  If you need stable code, use a tagged version. Read 'Further Documentation'
 and 'Installation'.

## What?

Provides a very strongly typed, but simple, general purpose Attribute Container based 
on [Monadic](https://github.com/chippyash/monad) principles.

## Why?

How many times have you written a class with a load of protected parameters (Attributes)
and then had to write all the getters and setters?  This library provides a general
purpose container for those attributes.  In addition the Attribute container and the
Attributes are Monadic and immutable, meaning that you can guarantee their state.

## How

Use the Attribution trait.

<pre>
use Chippyash\Attributes\Attribution;

class MyClass
{
	use Attribution;
}
</pre>

Your class now has 2 methods:

`public function getA(StringType $name): Attribute`

`public function hasA(StringType $name): bool`

To retrieve and test for an Attribute:

You can further use the AttributionSettable trait to add a setter.  NB. you 
need to use both together, as Attributal provides the protected $attributes
var to the class;

<pre>
use Chippyash\Attributes\Attribution;
use Chippyash\Attributes\AttributionSettable;

class MyClass
{
	use Attribution;
	use AttributionSettable;
}
</pre>

which adds 

`public function setA(StringType $name, Attribute $attribute): Attribution`

<pre>
	use Chippyash\Attributes\Attribute;
	use Chippyash\Type\String\StringType;
	
	$myClass = new MyClass();
	$attr = new Attribute('bar');
	$attrName = new StringType('foo);
	$test = $myClass->setA($attrName, $attr)->getA($attrName);
	
	echo ($myClass->hasA($attrName) ? 'true' : 'false');
	echo ($myClass->hasA(new StringType('bar)) ? 'true' : 'false');
	
</pre>

Attributes, being Monadic, have a value which can be retrieved thus:

<pre>
	$attrValue = $myClass->getA($attrName)->value();
	//or
	$attr = $myClass->getA($attrName);
	$attrValue = $attr();  //using the invokable interface
</pre>

If you need to, you can define your class to have an `Attributal` interface when
using the trait to communicate to other objects, that attributes can be tested and
retrieved.  You can use the `AttributalSettable` interface to communicate that the
class allows setting of Attributes, (this of course breaks the immutable interface,
so you might want to consider keeping a state history on the AttributeMap);

<pre>
use Chippyash\Attributes\Attribution;
use Chippyash\Attributes\AttributionSettable;
use Chippyash\Attributes\Attributal;
use Chippyash\Attributes\AttributalSettable;

class MyClass implements Attributal, AttributalSettable
{
	use Attribution;
	use AttributionSettable;
}

</pre>

## Further documentation

More about [Monads](https://github.com/chippyash/monad) and [here](http://zf4.biz/blog/functional-programming-monads)

[Test Contract](https://github.com/chippyash/attributes/blob/master/docs/Test-Contract.md) in the docs directory.

Check out [ZF4 Packages](http://zf4.biz/packages?utm_source=github&utm_medium=web&utm_campaign=blinks&utm_content=validation) for more packages

## Changing the library

1.  fork it
2.  write the test
3.  amend it
4.  do a pull request

Found a bug you can't figure out?

1.  fork it
2.  write the test
3.  do a pull request

NB. Make sure you rebase to HEAD before your pull request

Or - raise an issue ticket.

## Where?

The library is hosted at [Github](https://github.com/chippyash/attributes). It is
available at [Packagist.org](https://packagist.org/packages/chippyash/attributes)

### Installation

Install [Composer](https://getcomposer.org/)

#### For production

<pre>
    "chippyash/attributes": ">=1,<2"
</pre>

Or to use the latest, possibly unstable version:

<pre>
    "chippyash/attributes": "dev-master"
</pre>


#### For development

Clone this repo, and then run Composer in local repo root to pull in dependencies

<pre>
    git clone git@github.com:chippyash/attributes.git Attributes
    cd Attributes
    composer install
</pre>

To run the tests:

<pre>
    cd Attributes
    vendor/bin/phpunit -c test/phpunit.xml test/
</pre>

## License

This software library is released under the [GNU GPL V3 or later license](http://www.gnu.org/copyleft/gpl.html)

This software library is Copyright (c) 2017, Ashley Kitson, UK

A commercial license is available for this software library, please contact the author. 
It is normally free to deserving causes, but gets you around the limitation of the GPL
license, which does not allow unrestricted inclusion of this code in commercial works.

## History

V1.0.0 Initial Release

V1.0.1 Update dependencies
