# Remove Mass Assignment Protection

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rayblair/RemoveMassAssignment.svg?style=flat-square)](https://packagist.org/packages/rayblair/RemoveMassAssignment)
[![Build Status](https://img.shields.io/travis/rayblair/RemoveMassAssignment/master.svg?style=flat-square)](https://travis-ci.org/rayblair/RemoveMassAssignment)
[![Quality Score](https://img.shields.io/scrutinizer/g/rayblair/RemoveMassAssignment.svg?style=flat-square)](https://scrutinizer-ci.com/g/rayblair/RemoveMassAssignment)
[![Total Downloads](https://img.shields.io/packagist/dt/rayblair/RemoveMassAssignment.svg?style=flat-square)](https://packagist.org/packages/rayblair/RemoveMassAssignment)

Remove Mass Assignment Protection on your models.

## Installation

You can install the package via composer:

```bash
composer require rayblair/removemassassignment
```

## Usage

Simply inherit the `RemoveMassAssignmentModel` instead of `Illuminate\Database\Eloquent\Model` on models you which to remove mass assignment for.

Alternative I would create a new `EloquentModel` class that inherits the `RemoveMassAssignmentModel` class and then replace all `Illuminate\Database\Eloquent\Model` classes with your new base `EloquentModel` class . This may if you want to remove the `RemoveMassAssignmentModel` class or add additional functionality you only have to modify the `EloquentModel` class.

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rayblair06@hotmail.com instead of using the issue tracker.

## Credits

-   [Ray Blair](https://github.com/rayblair06)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
