# Raven for Laravel

A Laravel 5.1 library that easily integrates raven-php to centralize your logs using Sentry.

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
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
