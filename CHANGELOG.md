# CHANGELOG

All notable changes to [leanphp/common-dev][0] package will be documented in
this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## 7.0.x-dev / FUTURE

- Added ApiGen `4.2.0-RC1`
- Added phpstan `~0.6`
- Update PHP from `~5.6||~7.0` to `^7.0`
- Update BehatSpec from `0.3.*` to `dev-master`

## 6.4.0 / 2017-04-08

- Add `sami/sami:~3.2||~4.0` (ApiGen replacement)

## 6.3.1 / 2017-04-04

- Update phpspec from `~3.1` to `~3.2`

## 6.3.0 / 2017-03-05

- Update mockery from `~0.9` to `0.9.*`
- Update prophecy from `~1.6` to `~1.7`
- Update PHP CodeSniffer from `~2.7` to `~2.8`
- Update alice from `~2.2` to `~2.3`
- Add BehatSpec `0.3.*` (Behat3 + PhpSpec2)
- Change `henrikbjorn/phpspec-code-coverage` to `leanphp/phpspec-code-coverage`
  as the original will no longer be maintained.

## 6.2.2 - 2017-01-22

- Update phpmd from `~2.5` to `~2.6`
- Update phpunit from `~5.6` to `~5.7`

## 6.2.1 - 2016-12-27

- Update behat from `~3.2` to `~3.3`
- Update `bin/composer` to `1.3.0`

## 6.2.0 - 2016-12-03

- Update phpspec from `~2.5` to `~3.1`.
- Update phpspec-typehintedmethods from `~1.1` to `~2.0`
- Remove phpspec exemplify-extension (OUTDATED)
- Remove behat-spec extension (OUTDATED)

## 6.1.7 - 2016-12-02

- Update symfony/var-dumper from `~2.8||~3.0` to `~2.8||^3.1`
- Remove apigen (OUTDATED)

## 6.1.6 - 2016-10-26

- Fix package install problem caused by 6.1.5 by PHPUnit Update
- Update phpmd from `~2.4` to `~2.5`
- Update phpspec-code-coverage from `~2.0` to `~3.0`

## 6.1.5 - 2016-10-10

- Update phpunit from `~5.4` to `~5.6`

## 6.1.4 - 2016-09-24

- Update behat from `~3.1` to `~3.2`

## 6.1.3 - 2016-09-03

- Update PHP CodeSniffer from `~2.6` to `~2.7`

## 6.1.2 - 2016-07-23

- Update `bin/composer` to `1.2.0`
- Update phpunit from `~5.2` to `~5.4`
- Update alice from `~2.1` to `~2.2`

## 6.1.1 - 2016-05-11

- Update faker from `~1.5` to `~1.6`
- Update `bin/composer` from `1.0.0` to `1.1.0`

## 6.1.0 - 2016-04-27

- Update PHP CodeSniffer from `~2.5` to `~2.6`
- Add composer v1.0.0 as `bin/composer` and set it as bin in `composer.json`

## 6.0.4 - 2016-03-31

- Update behat from `~3.0` to `~3.1`

## 6.0.3 - 2016-03-26

- Update phpmd from `~2.3` to `~2.4`
- Update phpspec from `~2.4` to `~2.5`

## 6.0.2 - 2016-02-20

- Update phpunit from `~5.1` to `~5.2`
- Update prophecy from `~1.5` to `~1.6`
- Update behat/mink-extension from `~2.1` to `~2.2`

## 6.0.1 - 2016-01-17

- Update phplock from `~2.1` to `~3.0`

## 6.0.0 PHP 5.6 + PHP 7 - 2015-12-18

- Update PHP from `~5.6` to `~5.6||~7.0`

## 5.6.11 Final / 2017-01-28

This is final **5.6** series release. For **PHP 7** and **PHP 5.6+** support,
consider upgrading to **6.0** series.

Fix BehatSpec extension version to lock them to versions that support phpspec2.

## 5.6.10 / 2016-03-30

- Update behat from `~3.0` to `~3.1`

## 5.6.9 - 2016-03-26

- Update phpmd from `~2.3` to `~2.4`
- Update phpspec from `~2.4` to `~2.5`

## 5.6.8 - 2016-02-19

- Update phpunit from `~5.1` to `~5.2`
- Update prophecy from `~1.5` to `~1.6`
- Update behat/mink-extension from `~2.1` to `~2.2`

## 5.6.7 - 2016-01-16

- Update phplock from `~2.1` to `~3.0`

## 5.6.6 - 2015-12-17

- Update php_codesniffer from `~2.4` to `~2.5`
- Update behat-spec from `~0.1` to `~0.3`
- Update phpunit from `~5.0` to `~5.1`
- Update apigen from `~4.1` to `4.2.x-dev`
- Update README #Packages and #Usage sections to split the dependencies in 2 groups:
    - Libraries - for general purpose PHP libraries, testing frameworks etc.
    - Development Tools - for development tools and command line applications.
- Update README with USAGE information for these packages:
    - Libraries:
        - symfony/var-dumper
        - Mockery
        - Prophecy
        - Alice
        - Faker
        - vfsStream
    - Development Tools:
        - ApiGen
        - PHPMD
        - PHP CodeSniffer
        - phpcpd
        - phploc
- Add example configuration in `config/` directory for:
    - ApiGen (`config/apigen.yml`)
    - PHP_CodeSniffer (`config/phpcs.xml`)
    - PHPMD (`config/phpmd.xml`)
    - PHPUnit (`config/phpunit.xml`)
    - phpspec (`config/phpspec.yml`)
    - behat (`config/behat.yml`)
- Remove:
    - vipsoft/code-coverage-extension (behat) (OUTDATED)

## 5.6.5 - 2015-12-01

- Update phpspec from `~2.3` to `~2.4`
- Update php_codesniffer from `~2.2` to `~2.4`

## 5.6.4 - 2015-11-19

- Update symfony/var-dump from `~2.7` to `~2.8||~3.0`
- Update phpspec-typehintedmethods from `~1.0` to `~1.1`
- Update phpspec-code-coverage from  `~1.0` to `~2.0`

## 5.6.3 - 2015-10-10

- Update phpunit from `~4.8` to `~5.0`

## 5.6.2 - 2015-10-09

- Update behat/mink-extension from `~2.0` to `~2.1`
- Update vfsStream from `~1.5` to `~1.6`

## 5.6.1 - 2015-09-23

- Update mink from `~1.6` to `~1.7`
- Update alice from `~1.7` to `~2.1`
- Update faker from `~1.3` to `~1.5`
- Update mink-goutte-driver from `~1.1` to `~1.2`
- Update mink-browserkit-driver from `~1.2` to `~1.3`
- Update phpmd from `~2.2` to `~2.3`

## 5.6.0 - 2015-09-13

### Changed

- Update PHP from `~5.4` to `~5.6`.
- Update phpunit from `~4.7` to `~4.8`
- Update prophecy from `~1.3` to `~1.5`
- Update phpspec from `~2.1` to `~2.3`

## 5.5.3 Final PHP 5.5 - 2015-11-18

- Update symfony/var-dump from `~2.7` to `~2.8||~3.0`

## 5.5.2 - 2015-10-08

**5.5 series is last release to support PHP 5.5**

- Update behat/mink-extension from `~2.0` to `~2.1`
- Update vfsStream from `~1.5` to `~1.6`

## 5.5.1 - 2015-09-23

- Update mink from `~1.6` to `~1.7`
- Update alice from `~1.7` to `~2.1`
- Update faker from `~1.3` to `~1.5`
- Update mink-goutte-driver from `~1.1` to `~1.2`
- Update mink-browserkit-driver from `~1.2` to `~1.3`
- Update phpmd from `~2.2` to `~2.3`

## 5.5.0 - 2015-09-12

### Changed

- Update phpunit from `~4.7` to `~4.8`
- Update prophecy from `~1.3` to `~1.5`
- Update phpspec from `~2.1` to `~2.3`

## 5.4.6 Final PHP 5.4 - 2015-10-07

**5.4 series is last release to support PHP 5.4!**

Final 5.4 series release.

- Update behat/mink-extension from `~2.0` to `~2.1`
- Update vfsStream from `~1.5` to `~1.6`

## 5.4.5 - 2015-09-23

- Update mink from `~1.6` to `~1.7`
- Update alice from `~1.7` to `~2.1`
- Update faker from `~1.3` to `~1.5`
- Update mink-goutte-driver from `~1.1` to `~1.2`
- Update mink-browserkit-driver from `~1.2` to `~1.3`
- Update phpmd from `~2.2` to `~2.3`

## 5.4.4 - 2015-09-12

### Changed

- Update phpunit from `~4.7` to `~4.8`
- Update prophecy from `~1.3` to `~1.5`
- Update phpspec from `~2.1` to `~2.3`

## 5.4.3 - 2015-06-13

Final release to support PHP 5.4.

### Changed

- Update symfony/var-dumper from `~2.6` to `~2.7`
- Update phpunit from `~4.3` to `~4.7`

## 5.4.2 - 2015-04-08

### Changed

- Update vfsStream from `~1.4` to `~1.5`
- Update phploc from `~2.0` to `~2.1`
- Update apigen from `~4.0` to `~4.1`

## 5.4.1 - 2015-01-30

### Changed

- Update php_codesniffer from `~2.0` to `~2.2`
- Update phpmd from `~2.1` to `~2.2`

## 5.4.0 - 2015-01-05

5.4 version series are last release series to support PHP 5.4.

### Changed

- Update PHP from `~5.3,^5.3.3` to `~5.4`
- Update prophecy from `~1.2` to `~1.3`
- Update php_codesniffer from `~1.5` to `~2.0`
- Update phpspec-code-coverage from `~0.2` to `~1.0`
- Update phpspec from `~2.0` to `~2.1`

### Added

- rmiller/exemplify-extension `~0.2` (phpspec)
- rmiller/behat-spec `~0.1` (behat / phpspec integration)
- phpcs-symfony2-standard `~2.0` (for php_codesniffer)
- symfony/var-dumper `~2.6`
- apigen `~4.0`

## 5.3.0 Final PHP 5.3 - 2014-10-15

### Changed

- Update vfsStream from `~1.2` to `~1.4`
- Update phpunit from `~4.2` to `~4.3`
- Update mink-goutte-driver from `~1.0` to `~1.1`
- Update prophecy from `~1.1` to `~1.2`

## 5.2.0 - 2014-09-28

### Changed

- Update behat/mink-extension from `2.0.x-dev` to `~2.0`
- Update phpunit from `~4.1` to `~4.2`
- Update phpmd from `~2.0` to `~2.1,^2.1.2`
- Update behat/mink-browserkit-driver from `~1.1` to `~1.2`
- Update mink from `~1.5` to `~1.6`

## 5.1.0 - 2014-07-13

### Changed

- Update phpspec-code-coverage from `~0.1` to `~0.2`

## 5.0.0 - 2014-06-09

### Changed

- Update faker from `~1.3` to `~1.4`
- Update phpmd from `~1.5` to `~2.0`

### Added

- Add phpspec-code-coverage `~0.1`

## 4.3.0 - 2014-06-07

### Changes

- Update faker from `~1.3` to `~1.4`

## 4.2.0 - 2014-05-17

### Changed

- Update phpunit from `~4.0` to `~4.1`

## 4.1.0 - 2014-04-27

### Changed

- Update alice from `~1.6` to `~1.7`.

### Added

- phpspec-typehintedmethods `~1.0` (phpspec extension)

## 4.0.0 - 2014-04-23

### Changed

- Update PHP from `~5.3` to `~5.3,^5.3.3`
- Update phpspec from `~1.4` to `~2.0`
- Update mockery from `~0.7` to `~0.9`
- Update phpunit from `~3.7,^3.7.19` to `~4.0`
- Update behat from `~2.5` to `~3.0`
- Update behat/mink-extension from `~1.2` to `2.0.x-dev`
- Update behat/mink-browserkit-driver from `~1.0` to `~1.1`

### Added

- Add prophecy `~1.1`

## 3.5.0 - 2014-02-22

### Changed

- Update behat/mink-browserkit-driver from `~1.0` to `~1.1`

## 3.4.0 - 2014-02-17

### Changed

- Update behat/mink-extension from `~1.2` to `~1.3`
- Update alice from `~1.5,^1.5.2` to `~1.6`
- Update vipsoft/code-coverage-extension to from `^2.5.0.3` to `^2.5.0.5`

## 3.3.0 - 2014-01-05

### Changed

- Update vfsStream from `~1.1` to `~1.2`

## 3.2.0 - 2014-01-02

### Changed

- vipsoft/code-coverage-extension from `~2.5` to `~2.5.0,^2.5.0.3`

## 3.1.1 - 2013-12-29

- Updated PHP from `^5.3` to `~5.3,^5.3.3` as lower than `5.3.3` is NOT
  supported.

## 3.1.0 - 2013-12-20

### Changed

- Updated faker from `~1.2` to `~1.3`

## 3.0.0 - 2013-12-03

### Changed

- Update php_codesniffer from `~1.4,^1.4.2` to `~1.5`
- Updated package information.

### Added

- PHP `^5.3`
- vipsoft/code-coverage-extension `~2.5` (for behat)

## 2.1.0 - 2013-11-10

### Changed

- Update phpcpd from `~1.4,^1.4.1` to `~2.0`

## 2.0.0 - 2013-09-09

### Changed

- Update alice from `~1.4` to `~1.5,^1.5.2`
- Update behat from `~2.4` to `~2.5`
- Update behat/mink-extenstion from `~1.1` to `~1.2`
- Update phpunit from `~3.7` to `~3.7,^3.7.19`
- Update phploc from `~1.7,^1.7.3` to `~2.0`

## 1.5.0 - 2013-06-18

### Changed

- Update faker from `~1.1` to `~1.2`

## 1.4.0 - 2013-05-27

### Changed

- Update mink from `~1.4` to `~1.5`
- Update mink-extension from `~1.0` to `~1.1`

## 1.3.0 - 2013-04-21

### Changed

- alice from `~1.3` to `~1.4`

## 1.2.0 - 2013-04-20

### Added

- phpcpd `~1.4,^1.4.1`

## 1.1.0 - 2013-02-23

### Changed

- Update alice from `~1.1` to `~1.3`

## 1.0.0 - 2012-12-30

### Changed

- Update alice from `~1.0` to `~1.1`

## 0.4.0 - 2012-11-25

### Added

- PHP_CodeSniffer `~1.4,^1.4.2`
- phploc `~1.7,^1.7.3`
- alice `~1.0`

## 0.3.0 - 2012-11-04

### Added

- faker `~1.1`
- phpmd ~1.4

## 0.2.0 - 2012-10-28

### Fixed

- Install would fail on `0.1.x-dev` after mockery was moved before phpspec in
  `composer.json`.
- Unable to install package on PHP 5.2 (see [Removed](#Removed))
- No longer using `version` in `composer.json` and will rely on VCS (git) tags.

### Added

- behat `~2.4`
- mink `~1.4`
- behat/mink-extension `~1.0`
- behat/mink-goutte-driver `~1.0`
- behat/mink-browserkit-driver `~1.0`

### Removed

- PHP `^5.3` requirement as there is no need to specify it in a dev package
  explicitly.

## 0.1.1 - 2012-10-26

### Added

- mockery `~0.7`
- phpspec `~1.4`

### Changed

- Added more information in README.md regarding package information.
- Updated Package description and keywords.

## 0.1.0 - 2012-10-21

### Added

- PHP `^5.3`
- PHPUnit `~3.7`
- vfsStream `~1.1`

[0]: https://github.com/leanphp/common-dev
