common-dev
==========
[![License](https://img.shields.io/packagist/l/leanphp/common-dev.svg?style=flat-square)](#License)
[![Latest Stable Version](https://img.shields.io/packagist/v/leanphp/common-dev.svg?style=flat-square)](https://packagist.org/packages/leanphp/common-dev)
[![Total Downloads](https://img.shields.io/packagist/dt/leanphp/common-dev.svg?style=flat-square)](https://packagist.org/packages/leanphp/common-dev)
[![Travis](https://img.shields.io/travis/leanphp/common-dev.svg?style=flat-square)](https://travis-ci.org/leanphp/common-dev)
[![Pre Release](https://img.shields.io/packagist/vpre/leanphp/common-dev.svg?style=flat-square)](https://packagist.org/packages/leanphp/common-dev)

[leanphp/common-dev][0] is a set of modern **PHP 7+** development tools and
libraries, which help you write PHP packages and libraries that comply with
[PHP-FIG][1] standards and adhere to best PHP practices defined in [PHP - The
Right Way][2] guidelines.

**Note!** These tools help you write **well-tested** functional & **OOP** code
([TDD][3], [BDD][4], [SOLID][5]). This meta-package should serve more as an
example set of development tools that one can use. This package helps when you
want to hack something quick, however for serious projects you are advised to
compile a custom list of development dependencies in `composer.json` of your
project, instead of depending on this package directly.

See [Packages](#Packages) for a list of packages that this meta-package
provides. [Usage](#Usage) section covers information regarding various tools
and libraries. Additionally, we provide [example configuration
files](#Configuration) for various tools that this package provides (`config/`
directory).

## Install

Install this package as a development requirement in your project:

    $ composer require --dev leanphp/common-dev

## Packages

This package will trigger installation of various PHP [Libraries](#Libraries)
and [Development Tools](#Development Tools).

### Libraries

This is a list of PHP Libraries that this package installs:

- [symfony/var-dumper](#var-dumper) **v3** - Advanced Variable Dumper by
  Symfony project (`dump()` instead of `var_dump()`).
- [Mockery](#Mockery) **v1.0** - a simple yet flexible PHP mock object framework for
  use in unit testing.
- [Prophecy](#Prophecy) - highly opinionated mocking framework for PHP.
- [Alice](#Alice) - Expressive Fixtures generator based on [Faker](#Faker).
- [Faker](#Faker) - PHP Library to generate fake data for you.
- [vfsStream](#vfsStream) - Virtual file system to mock the real file system in unit
  tests.
- [PHPUnit](#PHPUnit) **v6** - The PHP Unit Testing framework.
- [PHPSpec](#PHPSpec) **v4** - SpecBDD / BDD Testing framework for PHP with extensions:
    - [phpspec-code-coverage][805] - Code Coverage for [PHPSpec][800].
    - [phpspec-typehintedmethods][810] - Generate Typehinted methods
- [behat](#Behat) **v3** - ScenarioBDD / BDD Testing framework for PHP, with
  extensions:
    - [behat/mink-extension][950] - [Mink][400] extension for [behat][900].
    - [behat/mink-goutte-driver][960] - [Goutte][450] driver for [Mink][400].
    - [behat/mink-browserkit-driver][970] - Symfony BrowserKit driver for
      [Mink][400].
- [Mink](#Mink) - Browser Emulator / Abstraction framework for PHP.

### Development Tools

This is a list of PHP Development Tools that this package installs:

- [Sami](#Sami) - An API Documentation generator.
- [PHPStan](#PHPStan) - PHP Static Analysis tool.
- [PHPMD](#PHPMD) **v2** - PHP Mess Detector. Optimize your code, reduce
  complexity, cleanup unused parameters, methods, variables & more.
- [PHP_CodeSniffer](#PHP CodeSniffer) **v3** - PHP Code Sniffer ensures that
  your code remains clean and consistent. It is a set of scripts to detect and
  automatically correct violations of a defined coding standard.
- [phpcs-symfony2-standard][140] - Symfony2 Coding Standard configuration for
  [PHP_CodeSniffer][130].
- [phpcpd](#phpcpd) - Copy/Paste Detector (CPD) for PHP code.
- [phploc](#phploc) - a tool that quickly measures the size of your PHP project.
- [composer][7] binary is also included in this package (`bin/composer`).

## Usage

**Note!** When executing command we will use `bin/command` as an example. This
requires `bin-dir` parameter set in `composer.json` of your project:

```js
    "config": {
        "bin-dir": "bin"
    },
```

If `bin-dir` is not set, use `./vendor/bin` prefix when running command line tools.

### Libraries

#### var-dumper

[symfony/var-dumper][110] is an Advanced Variable Dumper by  Symfony project.
It provides developer with `dump()` function which is a better alternative to
`var_dump()` or `print_r()`. It provides well formatted output, which adapt
depending on context (console, browser) and packs nice additional features.

This package add **global function** `dump()`, which can be called from
anywhere in your code:

```php
    <?php
    require 'vendor/autoload.php';

    $date = new \DateTime()
    dump($date)
```

**Note!** Try executing the example snippet above in the console AND then
browser to see the differences.

#### Mockery

[Mockery][210] is a simple yet flexible PHP mock object framework for use in
unit testing with [PHPSpec](#PHPSpec) or [PHPUnit](#PHPUnit). It allows you to
mock objects in tests, so the tests run faster and do not have to initialize
the dependencies directly. For an alternative approach, make sure to check
[Prophecy](#Prophecy).

Mockery is integrated with [PHPUnit](#PHPUnit), but can be used with any
testing framework.

For more information check [Mockery Documentation page][211].

#### Prophecy

[Prophecy][220] is a highly opinionated mocking framework for PHP. It was
initially created for [PHPSpec](#PHPSpec) needs but it is flexible to be used
in any testing framework ([PHPUnit](#PHPUnit), [Behat](#Behat)). It approaches
testing from a different angle than [Mockery](#Mockery) because it concentrates
on describing the future behaviour of objects, instead of mocking them.

For more information check [Prophecy Repository on Github][220].

#### Alice

[Alice][240] is an Expressive Fixtures generator based on [Faker](#Faker). It
allows you to quickly create fixtures (fake data) while developing or testing
your PHP code. Alice is very useful while working with projects, based on
Symfony, Doctrine, Zend or any other framework. For testing your packages, you
can just use [Faker](#Faker) directly.

For more information check [Alice repository on GitHub][240].

#### Faker

[Faker][250] is PHP Library to generate fake data for you. Whether you need to
bootstrap your database, create good-looking XML documents or just need any
fake data, Faker is for you. If you need a solution that integrated well with
Symfony, Doctrine, Zend or any other frameworks, check [Alice](#Alice) (based
on Faker).

Basic fake usage:

```php
<?php

require 'vendor/autoload.php';
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
// 'Lucy Cechtelar';
echo $faker->address;
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"
echo $faker->text;
// Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
// et sit et mollitia sed.
```

For more information check [Faker repository on GitHub][250].

#### vfsStream

[vfsStream][300] is Virtual file system to mock the real file system in unit
tests. It comes in handy when you need to perform file operations in your code
and want them to be thoroughly tested. It's best to abstract such tests by
using a virtual file system and vfsStream allows you to do that.

For more information check [vfsStream Wiki on GitHub][301].

#### PHPUnit

[PHPUnit][200] is The PHP Unit Testing framework. It's an industry proven and
standard unit testing framework for PHP. If you prefer to do simple TDD instead
of BDD - [behat][900] (StoryBDD) or [PHPSpec][800] (SpecBDD), then this is your
test tool of choice.

In order to setup PHPUnit for your project, you can use example
[phpunit.xml](config/phpunit.xml) configuration file.

Copy it to the root of your project:

    $ cp vendor/leanphp/common-dev/config/phpunit.xml phpunit.xml

If your tests are NOT stored in `tests/` directory, adjust the `<testsuites>`
tag in `phpunit.xml`. The file provides additional comments and settings that
can be useful when setting up PHPUnit for your project PHP package.

Run PHPUnit tests:

    $ bin/phpunit

PHPUnit will generate various reports (defaults to `build/` directory), which
can be used by various tools when analyzing your code and tests (i.e. test code
coverage generation).

For more information check [PHPUnit Documentation][201].

#### PHPSpec

[PHPSpec][800] is a SpecBDD ([BDD][4]) Testing framework for PHP. It is
specification oriented testing framework. It allows you to define your tests,
which then are used to generate PHP Classes, based on the defined
specification. PHPSpec is also great for unit testing.

In order to setup PHPSpec for your project, you can use example
[phpspec.yml](config/phpspec.yml) configuration file.

Copy it to the root of your project:

    $ cp vendor/leanphp/common-dev/config/phpspec.yml phpspec.yml

The configuration file will enable all the PHPSpec extensions that come
installed with this package.

**Note!** Due to PSR-4 you have to set the default PSR-4 namespace in
`phpspec.yml` which is set to `LeanPHP\Common` in the example `phpspec.yml`.
**Make sure to change it to your package's namespace!**.

Write your first spec file `spec/ClassSpec.php`:

```php
<?php

namespace spec\LeanPHP\Common;

use PhpSpec\ObjectBehavior;

class ClassSpec extends ObjectBehavior
{
    function it_can_say_hello()
    {
        $this->say('hello')->shouldReturn('hello');
    }
}
```

Run PHPSpec to generate the class, based on the defined specification:

    $ bin/phpspec run

PHPSpec will fail the test, but will ask you to generate the classes for you.

For more information check [PHPSpec Documentation page][801].

#### Behat

[behat][900] is a ScenarioBDD / BDD Testing framework for PHP. It allows you to
define your tests in human readable scenario format, based on gherkin language.
It offers a very basic, yet effective test scenario structure. It has became
a standard ScenarioBDD/BDD tool for PHP. It integrated well with
[PHPSpec](#PHPSpec) and [Mink](#Mink). The latter makes it perfect for
**functional testing**.

In order to setup Behat for your project, you can use example
[behat.yml](config/behat.yml) configuration file.

Copy it to the root of your project:

    $ cp vendor/leanphp/common-dev/config/behat.yml behat.yml

Initialize the project:

    $ bin/behat --init

The configuration file will enable all the Behat extensions that come
installed with this package and will also integrate it with
[PHPSpec](#PHPSpec).

**Note!** The default configuration uses [mink-goutte-driver][960] extension by
default. If you want integration with Symfony based project, switch to
[mink-browserkit-driver][870].

For more information check [Behat Quick Start][902] and consult [Behat
Documentation page][901].

#### Mink

[Mink][400] is a Browser Emulator / Abstraction framework for PHP. It allows
you to simulate a browser in your tests. It's functionality is based on
different drivers that it supports. It is able to integrate with
[Selenium][460], [Goutte][450] and other browsers to run your tests with. While
it can be used as a standalone tool, it is a core part of [Behat](#Behat) and
it does not require any special configuration, besides what is covered in
[Behat](#Behat) section.

For more information check [Mink Homepage][400].

### Development Tools

#### Sami

[Sami][100] is an API documentation generator. It generates API documentation
for your PHP source code (classes, interfaces, traits, methods etc.). Have
a look at [Symfony API](http://api.symfony.com/) to see a working example of
what Sami does.

You can start with example [sami.php](config/sami.php) configuration file.

Copy it to the root of your project:

    $ cp vendor/leanphp/common-dev/config/sami.php .sami.php

Please check comments in `.sami.php` and customize it according to your needs.

Generate the API:

    $ bin/sami update .sami.php

The API Documentation will be generated in `build/docs/<version>` directory,
which is configured in `.sami.php`.

#### PHPStan

**Note!** PHPSten is temporarily not provided by the package as it conflicts
with ApiGen. Additionally we believe we need to review the usability of some of
the other tools if we also bring PHPStan.

[PHPStan][115] is a PHP Static Analysis Tool. It focuses on finding errors in
your code without actually running it. It catches whole classes of bugs even
before you write tests for the code.

`PHPStan` is run via console:

    $ bin/phpstan analyse src tests

#### PHPMD

[PHPMD][120] (PHP Mess Detector) is a code optimizer, which scans your code for
complexity, unused parameters, methods. It helps developers optimize their PHP
code. It can also point out more problematic areas of your code, that need
refactoring or are too complex. It's a great tool in any PHP developers
toolbox.

PHP Mess Detector is highly configurable and you can define different [rulese][121].
It is best to use example [phpmd.xml](config/phpmd.xml) configuration file,
which has all of them enabled and customize from there.

Copy it to the root of your project:

    $ cp vendor/leanphp/common-dev/config/phpmd.xml phpmd.xml

PHPMD is run via console:

    $ bin/phpmd <SOURCE_DIR> <FORMAT> <RULESET_FILENAME>

You can generate a text formatted report for your source code in `src/`
directory, but using `phpmd.xml` ruleset:

    $ bin/phpmd src/ text phpmd.xml

**Note!** Consult [PHPMD Documentation on Rules][121] when customizing
`phpmd.xml` for your project!

#### PHP CodeSniffer

[PHP_CodeSniffer][130](#PHP CodeSniffer) ensures that your code remains clean
and consistent. It is a set of scripts to detect and automatically correct
violations of a defined coding standard. It is extremely useful to keep the
code consistent, especially when there are multiple developers working on one
project. It is also helpful when working alone as it will make you write more
consistent code.

It is best to use example [phpcs.xml](config/phpcs.xml) configuration file as it has a Symfony based coding standard defined, which will give you a good start.

Copy the example config to the root of your project:

    $ cp vendor/leanphp/common-dev/config/phpcs.xml phpcs.xml

If your source code is NOT stored in `src/` directory, adjust the `<file>` tag
in `phpcs.xml`. Additionally, make sure that any test or build directories are
excluded (via `<exclude-pattern>` tag).

To get a list of coding standard violations, Run PHP CodeSniffer tool:

    $ bin/phpcs

PHP CodeSniffer also includes a tool which allows you to fix many of these
violations automatically:

    $ bin/phpcbf

#### phpcpd

[phpcpd][150] is a Copy/Paste Detector (CPD) for PHP code. It allows you to
scan your PHP files and detect duplicate code (likely a Copy/Paste). This is
a code that likely needs refactoring. It's a great tool to improve the quality
of your code.

To scan `src/` directory and detect problematic areas in your code:

    $ bin/phpcpd src/

#### phploc

[phploc][160] is a tool that quickly measures the size of your PHP project. It
scans the structure of your PHP Source Code and returns various statistics
about it (such as number of Classes, Methods, Variables etc.).

In order to scan source code directory `src/`:

    $ bin/phploc src/

## Configuration

You can find example configuration files for the tools and libraries in
`config/` directory. Included example config files:

- [apigen.yaml](config/apigen.yaml) - [ApiGen](#ApiGen) example config.
- [phpcs.xml](config/phpcs.xml) - [PHP_CodeSniffer](#PHP CodeSniffer) Coding
  Standard config.
- [phpmd.xml](config/phpmd.xml) - [PHPMD](#PHPMD) example config.
- [phpunit.xml](config/phpunit.xml) - [PHPUnit][200] example config.
- [phpspec.yml](config/phpspec.yml) - [phpspec][800] example config.
- [behat.yml](config/behat.yml) - [behat][900] example config.

These configuration files must either be placed in the root of your repository
or you have to point configuration file manually when using a specific tool.
Most of the time making a copy of the file in the project's root and
customizing it should be sufficient.

## Change Log

Please see [CHANGELOG.md](CHANGELOG.md) for information of what was changed.

## Author

Copyright (c) 2012-2017 ek9 <dev@ek9.co> (https://ek9.co)

## License

Licensed under [MIT License](LICENSE).

[0]: https://packagist.org/packages/leanphp/common-dev
[1]: http://www.php-fig.org
[2]: http://www.phptherightway.com
[3]: https://en.wikipedia.org/wiki/Test-driven_development
[4]: https://en.wikipedia.org/wiki/Behavior-driven_development
[5]: https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)
[6]: https://packagist.org
[7]: https://getcomposer.org

[100]: https://github.com/FriendsOfPHP/Sami
[110]: https://github.com/symfony/var-dumper
[115]: https://github.com/phpstan/phpstan
[120]: https://phpmd.org
[121]: https://phpmd.org/rules/index.html
[130]: https://pear.php.net/package/PHP_CodeSniffer
[140]: https://github.com/leaphub/phpcs-symfony2-standard
[150]: https://github.com/sebastianbergmann/phpcpd
[160]: https://github.com/sebastianbergmann/phploc
[200]: https://phpunit.de
[201]: https://phpunit.de/documentation.html
[210]: https://github.com/padraic/mockery
[211]: http://docs.mockery.io/en/latest/index.html
[220]: https://github.com/phpspec/prophecy
[240]: https://github.com/nelmio/alice
[250]: https://github.com/fzaninotto/Faker
[300]: https://github.com/mikey179/vfsStream
[301]: https://github.com/mikey179/vfsStream/wiki
[400]: http://mink.behat.org
[450]: https://github.com/FriendsOfPHP/Goutte
[460]: http://docs.seleniumhq.org
[800]: http://www.phpspec.net
[801]: http://www.phpspec.net/en/stable/manual/introduction.html
[805]: https://github.com/leanphp/phpspec-code-coverage
[810]: http://github.com/ciaranmcnulty/phpspec-typehintedmethods
[900]: http://behat.org
[901]: http://behat.org/en/latest/guides.html
[902]: http://behat.org/en/latest/quick_start.html
[950]: http://extensions.behat.org/mink
[960]: https://github.com/minkphp/MinkGoutteDriver
[970]: https://github.com/minkphp/MinkBrowserKitDriver
