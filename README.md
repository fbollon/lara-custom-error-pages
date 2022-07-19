
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# Custom error pages for Laravel applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fbollon/lara-custom-error-pages.svg?style=flat-square)](https://packagist.org/packages/fbollon/lara-custom-error-pages)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/fbollon/lara-custom-error-pages/run-tests?label=tests)](https://github.com/fbollon/lara-custom-error-pages/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/fbollon/lara-custom-error-pages/Check%20&%20fix%20styling?label=code%20style)](https://github.com/fbollon/lara-custom-error-pages/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fbollon/lara-custom-error-pages.svg?style=flat-square)](https://packagist.org/packages/fbollon/lara-custom-error-pages)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/lara-custom-error-pages.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/lara-custom-error-pages)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require fbollon/lara-custom-error-pages
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-views"
```

## Usage

```php
$laraCustomErrorPages = new Fbollon\LaraCustomErrorPages();
echo $laraCustomErrorPages->echoPhrase('Hello, Fbollon!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/fbollon/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Frédéric Bollon](https://github.com/fbollon)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
