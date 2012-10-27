common-dev
==========

[ek9/common-dev][0] aims to provide a developer with a set of modern PHP
development tools to write PHP packages and libraries that comply with
[PHP-FIG][1] standards and adhere to best PHP practices defined in [PHP - The
Right Way][2].

Write **well-tested** ([TDD][6] / [BDD][7]) **object-oriented** code, that
follows [SOLID][3] principles! **Distribute** your code via [Packagist][4] by using [composer][5].

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

- [phpunit][100] - The PHP Unit Testing framework.
- [phpspec][110] - SpecBDD / BDD Testing framework for PHP.
- [behat][120] - ScenarioBDD / BDD Testing framework for PHP.
- [mink][130] - Browser Emulator / Abstraction framework for PHP.
- [behat/mink-extension][121] - [mink][130] extension for [behat][120].
- [behat/mink-goutte-driver][123] - [Goutte][140] driver for [mink][130].
- [mockery][200] - a simple yet flexible PHP mock object framework for use in
  unit testing.
- [vfsStream][300] - Virtual file system to mock the real file system in unit
  tests.

## Change Log

Please see [CHANGELOG.md](CHANGELOG.md) for information of what was changed.

## Author

Copyright (c) 2012 ek9 <dev@ek9.co> (https://ek9.co)

## License

Licensed under [MIT License](LICENSE).

[0]: https://packagist.org/packages/ek9/common-dev
[1]: https://github.com/php-fig/fig-standards
[2]: http://www.phptherightway.com
[3]: https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)
[4]: https://packagist.org
[5]: https://getcomposer.org
[6]: https://en.wikipedia.org/wiki/Test-driven_development
[7]: https://en.wikipedia.org/wiki/Behavior-driven_development

[100]: https://phpunit.de
[110]: http://www.phpspec.net
[120]: http://behat.org
[121]: http://extensions.behat.org/mink
[123]: https://github.com/minkphp/MinkGoutteDriver
[130]: http://mink.behat.org
[140]: https://github.com/FriendsOfPHP/Goutte
[200]: https://github.com/padraic/mockery
[300]: https://github.com/mikey179/vfsStream
