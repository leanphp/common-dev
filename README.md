common-dev
==========

[ek9/common-dev][0] aims to provide a developer with a set of modern PHP
development tools to write PHP packages and libraries that comply with
[PHP-FIG][1] standards and adhere to best PHP practices defined in [PHP - The
Right Way][2].

Write **well-tested** **object-oriented** code, that follows [SOLID][3]
principles! **Distribute** your code via [Packagist][4] by using [composer][5].

See [Packages](#Packages) for a list of packages that this meta-package
provides.

## Install

    $ composer.phar require-dev ek9/common-dev

## Packages

This package will trigger installation of the following packages:

- [phpunit][10] - The PHP Unit Testing framework.
- [vfsStream][20] - Virtual file system to mock the real file system in unit
  tests.

## Change Log

Please see [CHANGELOG.md](CHANGELOG.md) for information of what was changed.

## Author

Copyright (c) 2012 ek9 <dev@ek9.co> (https://ek9.co)

## License

Licensed under [MIT License](LICENSE).

[0]: https://packagist.org/packages/ek9/common-dev
[1]: https://github.com/php-fig/fig-standards
[2]: http://www.phptherightway.com/
[3]: https://en.wikipedia.org/wiki/SOLID_(object-oriented_design)
[4]: https://packagist.org/
[5]: https://getcomposer.org/
[10]: https://phpunit.de/
[20]: https://github.com/mikey179/vfsStream
