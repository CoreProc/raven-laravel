# Raven for Laravel 5.1

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A Laravel 5.1 library that easily integrates [raven-php](https://github.com/getsentry/raven-php) to centralize your logs using [Sentry](https://getsentry.com/).

## Install

Go to the root of your Laravel 5.1 project and run the following command:

``` bash
composer require coreproc/raven-laravel
```

Then in your `config/app.php` add the `RavenServiceProvider` to your `providers` array

```php
'providers' => array(

    ...
    Coreproc\RavenLaravel\Providers\RavenServiceProvider::class,
),
```

Back on your terminal, run the following command to publish the `sentry.php` config file:

``` bash
php artisan vendor:publish
```

Edit your `config/sentry.php` file and enable Sentry logging by setting `enabled` to true and plugging in your DSN from your Sentry project.

```php
'enabled' => true,

'dsn'     => 'https://***:***@sentry.yourdomain.com/{project}'
```

## Configuration

You can configure Raven through the `config/sentry.php` config file. All the available options are already in there together with their default values.

You can find more details about the available options in Raven using this link:

[https://github.com/getsentry/raven-php#configuration](https://github.com/getsentry/raven-php#configuration)

## Testing

To test if your Sentry application is correctly grabbing your logs, simply launch `php artisan tinker` and execute a sample log like so:

``` bash
$ php artisan tinker
>>> Log::error("This is a test error. Sentry should get this.");
```

## Security

If you discover any security related issues, please email chris.bautista@coreproc.ph instead of using the issue tracker.

## Credits

- [Chris Bautista](https://github.com/chrisbjr)
- [Clarke Plumo](https://github.com/arkeidolon)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/coreproc/raven-laravel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/coreproc/raven-laravel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/coreproc/raven-laravel
[link-downloads]: https://packagist.org/packages/coreproc/raven-laravel