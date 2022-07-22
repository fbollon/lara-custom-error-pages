

# Custom error pages for Laravel applications

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fbollon/lara-custom-error-pages.svg?style=flat-square)](https://packagist.org/packages/fbollon/lara-custom-error-pages)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/fbollon/lara-custom-error-pages/run-tests?label=tests)](https://github.com/fbollon/lara-custom-error-pages/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/fbollon/lara-custom-error-pages/Check%20&%20fix%20styling?label=code%20style)](https://github.com/fbollon/lara-custom-error-pages/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fbollon/lara-custom-error-pages.svg?style=flat-square)](https://packagist.org/packages/fbollon/lara-custom-error-pages)

Custom and configurable error pages for Laravel

![alt text](./blob/screenshot_503.jpg?raw=true)

## Installation

You can install the package via composer:

```bash
composer require fbollon/lara-custom-error-pages
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-config"
```

This is the contents of the published config file:

```php
return [

    /** Custom header to include
     * for example to allow you to use your own fonts and css
     *
     * 'custom_header' => 'layouts.partials.header',
     *
     */

    'custom_header' => null,

    /** to display an autorefresh message and a countdown */
    'autorefresh' => [
        /** error numbers for which you want an autorefresh to reload the page */
        'errors' => [
            // 503,
        ],
        /** autorefresh interval in seconds */
        'interval' => 120
    ]
];
```

You have to publish the views to resources/views/errors/ with

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-views"
```

You have to publish the images to public/vendor/lara-custom-error-pages/images/ with

```bash
php artisan vendor:publish --tag="lara-custom-error-pages-assets"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Frédéric Bollon](https://github.com/fbollon)
- Image by <a href="https://pixabay.com/fr/users/kirahoffmann-1855684/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1497227">Kira Hoffmann</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1497227">Pixabay</a>
- Image by <a href="https://pixabay.com/fr/users/ornaw-8155178/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4212584">Orna Wachman</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4212584">Pixabay</a>
- Image by <a href="https://pixabay.com/fr/users/aitoff-388338/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1751089">Andrew Martin</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1751089">Pixabay</a>
- Image by <a href="https://pixabay.com/fr/users/publicdomainpictures-14/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=69389">PublicDomainPictures</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=69389">Pixabay</a>
- Image by <a href="https://pixabay.com/fr/users/anncapictures-1564471/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3156771">anncapictures</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=3156771">Pixabay</a>
- Image by <a href="https://pixabay.com/fr/users/iammrrob-5387828/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2972105">Robinraj Premchand</a> from <a href="https://pixabay.com/fr/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2972105">Pixabay</a>
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
