# CHANGELOG

This is a CHANGELOG file for [ek9/common-dev][0] package.

## 0.4.x-dev / FUTURE

### Added


## 0.3.0 / 2012-11-04

### Added

- faker `~1.1`
- phpmd ~1.4

## 0.2.0 / 2012-10-28

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

## 0.1.1 / 2012-10-26

### Added

- mockery `~0.7`
- phpspec `~1.4`

### Changed

- Added more information in README.md regarding package information.
- Updated Package description and keywords.

## 0.1.0 / 2012-10-21

### Added

- PHP `^5.3`
- PHPUnit `~3.7`
- vfsStream `~1.1`

[0]: https://packagist.org/packages/ek9/common-dev
