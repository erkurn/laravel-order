
<img src="https://banners.beyondco.de/Laravel%20Order.png?theme=light&packageManager=composer+require&packageName=erkurn%2Flaravel-order&pattern=iLikeFood&style=style_2&description=Handle+Order+And+Change+State&md=1&showWatermark=0&fontSize=225px&images=document" />

# Laravel Order

[![Latest Version on Packagist](https://img.shields.io/packagist/v/erkurn/laravel-order.svg?style=flat-square)](https://packagist.org/packages/erkurn/laravel-order)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/erkurn/laravel-order/run-tests?label=tests)](https://github.com/erkurn/laravel-order/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/erkurn/laravel-order/Check%20&%20fix%20styling?label=code%20style)](https://github.com/erkurn/laravel-order/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/erkurn/laravel-order.svg?style=flat-square)](https://packagist.org/packages/erkurn/laravel-order)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-order.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-order)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require erkurn/laravel-order
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-order-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-order-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-order-views"
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

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [:author_name](https://github.com/:author_username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
