# :package_description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/neazk/package_name.svg?style=flat-square)](https://packagist.org/packages/neazk/package_name)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/neazk/package_name/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/neazk/package_name/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/neazk/package_name/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/neazk/package_name/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/neazk/package_name.svg?style=flat-square)](https://packagist.org/packages/neazk/package_name)

## <!--delete-->

This repo can be used to scaffold a Laravel package. Follow these steps to get started:

1. Press the "Use this template" button at the top of this repo to create a new repo with the contents of this skeleton.
2. Run "php ./configure.php" to run a script that will replace all placeholders throughout all the files.
3. Have fun creating your package.

---

<!--/delete-->

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require neazk/package_name
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="package_name-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="package_name-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="package_name-views"
```

## Usage

```php
$variable = new VendorName\Skeleton();
echo $variable->echoPhrase('Hello, VendorName!');
```

## Testing

```bash
composer test
```

## Credits

- [ibrahim](https://github.com/neazk)
- [All Contributors](../../contributors)

## License

The MIT License (MIT).
