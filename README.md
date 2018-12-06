# MonkeyPatcher

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

Access private functions and properties of PHP classes. Primarily used to muck with things under test.

## Install

Via Composer

``` bash
$ composer require kidfund/monkey-patcher
```

## Usage

*Note: If you are using this, you may have a broken pattern somewhere. Either in your main code or in test-land. But, sometimes you need it!*

### Setup

Add the trait to your test

```php
class MonkeyPatcherUnitTest extends PHPUnit_Framework_TestCase
{
    use MonkeyPatcher;
```

### Access a private function

```php
$this->invokeMethod($object, 'do', ['something']);

```

### Set a private property

```php
$this->setProperty($object, 'msg', 'hello');

```

### Get a private property

```php
$this->getProperty($object, 'msg');

```

## Testing

``` bash
$ ./vendor/bin/phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [@timborder][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/kidfund/monkey-patcher.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/kidfund/monkey-patcher/master.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/kidfund/monkey-patcher.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/kidfund/monkey-patcher
[link-travis]: https://travis-ci.org/kidfund/monkey-patcher.svg
[link-downloads]: https://packagist.org/packages/kidfund/monkey-patcher.svg
[link-author]: https://github.com/timbroder
[link-contributors]: ../../contributors
