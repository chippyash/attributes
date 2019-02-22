#!/bin/bash
cd ~/Projects/chippyash/source/Attributes/
vendor/phpunit/phpunit/phpunit -c test/phpunit.xml --testdox-html contract.html test/
tdconv -t "Chippyash Attributes" contract.html docs/Test-Contract.md
rm contract.html

