common-dev
==========

[![Latest Stable Version](https://poser.pugx.org/ek9/common-dev/version)](https://packagist.org/packages/ek9/common-dev)
[![Latest Unstable Version](https://poser.pugx.org/ek9/common-dev/v/unstable)](https://packagist.org/packages/ek9/common-dev)
[![MIT License](https://poser.pugx.org/ek9/common-dev/license)](https://packagist.org/packages/ek9/common-dev)

[ek9/common-dev][0] is a set of modern PHP development tools and libraries,
which help you write PHP packages and libraries that comply with [PHP-FIG][1]
standards and adhere to best PHP practices defined in [PHP - The Right Way][2]
guidelines.

These tools help you write **well-tested** functional & **OOP** code ([TDD][3],
[BDD][4], [SOLID][5]). It will allows you to **distribute** your code via
[Packagist][6] by using [composer][7].

See [Packages](#Packages) for a list of packages that this meta-package
provides.

## Install

Install this package as a development requirement in your project:

    $ composer require-dev ek9/common-dev

Alternatively, you can edit `composer.json` and add this package to
`require-dev` section manually:

```js
    "require-dev": {
        "ek9/common-dev": "~0.1"
    }
```

After this is done, make sure to run `composer update` so the new development
dependencies are downloaded by [composer][5].

## Packages

This package will trigger installation of the following packages:

- [phpmd][110] - PHP Mess Detector. Optimize your code, reduce complexity,
  cleanup unused parameters, methods, variables & more.
- [PHP_CodeSniffer][120] - PHP Code Sniffer ensures that your code remains clean
  and consistent. It is a set of scripts to detect and automatically correct
  violations of a defined coding standard.
- [phpcpd][130] - Copy/Paste Detector (CPD) for PHP code.
- [phploc][140] - a tool that quickly measures the size of your PHP project.
- [phpunit][200] - The PHP Unit Testing framework.
- [mockery][210] - a simple yet flexible PHP mock object framework for use in
  unit testing.
- [prophecy][220] - highly opinionated mocking framework for PHP.
- [alice][240] - Expressive Fixtures generator based on [faker][250].
- [faker][250] - PHP Library to generate fake data for you.
- [vfsStream][300] - Virtual file system to mock the real file system in unit
  tests.
- [mink][400] - Browser Emulator / Abstraction framework for PHP.
- [phpspec][800] - SpecBDD / BDD Testing framework for PHP.
- [behat][900] - ScenarioBDD / BDD Testing framework for PHP.
- [vipsoft/code-coverage-extension][910] - Code Coverage for [behat][900].
- [behat/mink-extension][950] - [mink][400] extension for [behat][900].
- [behat/mink-goutte-driver][960] - [Goutte][450] driver for [mink][400].
- [behat/mink-browserkit-driver][970] - Symfony2 BrowserKit driver for
  [mink][400].

## Change Log

Please see [CHANGELOG.md](CHANGELOG.md) for information of what was changed.

## Author

Copyright (c) 2012-2013 ek9 <dev@ek9.co> (https://ek9.co)

## License

Licensed under [MIT License](LICENSE).

[0]: https://packagist.org/packages/ek9/common-dev
[1]: http://www.php-fig.org
[2]: http://www.phptherightway.com
[3]: https://en.wikipedia.org/wiki/Test-driven_development
[4]: https://en.wikipedia.org/wiki/Behavior-driven_development
[5]: https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)
[6]: https://packagist.org
[7]: https://getcomposer.org

[110]: https://phpmd.org
[120]: https://pear.php.net/package/PHP_CodeSniffer
[130]: https://github.com/sebastianbergmann/phpcpd
[140]: https://github.com/sebastianbergmann/phploc
[200]: https://phpunit.de
[210]: https://github.com/padraic/mockery
[220]: https://github.com/phpspec/prophecy
[240]: https://github.com/nelmio/alice
[250]: https://github.com/fzaninotto/Faker
[300]: https://github.com/mikey179/vfsStream
[400]: http://mink.behat.org
[450]: https://github.com/FriendsOfPHP/Goutte
[800]: http://www.phpspec.net
[900]: http://behat.org
[910]: https://github.com/vipsoft/code-coverage-extension
[950]: http://extensions.behat.org/mink
[960]: https://github.com/minkphp/MinkGoutteDriver
[970]: https://github.com/minkphp/MinkBrowserKitDriver

