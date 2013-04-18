common-dev
==========

[ek9/common-dev][0] aims to provide a developer with a set of modern PHP
development tools to write PHP packages and libraries that comply with
[PHP-FIG][1] standards and adhere to best PHP practices defined in [PHP - The
Right Way][2].

Write **well-tested** ([TDD][3] / [BDD][4]) **object-oriented** code, that
follows [SOLID][5] principles! **Distribute** your code via [Packagist][6] by using [composer][7].

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
- [phpcpd][125] - Copy/Paste Detector (CPD) for PHP code.
- [phploc][130] - a tool that quickly measures the size of your PHP project.
- [phpunit][200] - The PHP Unit Testing framework.
- [mockery][210] - a simple yet flexible PHP mock object framework for use in
  unit testing.
- [alice][240] - Expressive Fixtures generator based on [faker][250].
- [faker][250] - PHP Library to generate fake data for you.
- [vfsStream][300] - Virtual file system to mock the real file system in unit
  tests.
- [mink][400] - Browser Emulator / Abstraction framework for PHP.
- [phpspec][800] - SpecBDD / BDD Testing framework for PHP.
- [behat][900] - ScenarioBDD / BDD Testing framework for PHP.
- [behat/mink-extension][910] - [mink][400] extension for [behat][900].
- [behat/mink-goutte-driver][920] - [Goutte][450] driver for [mink][400].
- [behat/mink-browserkit-driver][930] - Symfony2 BrowserKit driver for
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
[125]: https://github.com/sebastianbergmann/phpcpd
[130]: https://github.com/sebastianbergmann/phploc
[200]: https://phpunit.de
[210]: https://github.com/padraic/mockery
[240]: https://github.com/nelmio/alice
[250]: https://github.com/fzaninotto/Faker
[300]: https://github.com/mikey179/vfsStream
[400]: http://mink.behat.org
[450]: https://github.com/FriendsOfPHP/Goutte
[800]: http://www.phpspec.net
[900]: http://behat.org
[910]: http://extensions.behat.org/mink
[920]: https://github.com/minkphp/MinkGoutteDriver
[930]: https://github.com/minkphp/MinkBrowserKitDriver

