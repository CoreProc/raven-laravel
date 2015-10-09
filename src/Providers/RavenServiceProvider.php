<?php

namespace Coreproc\RavenLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RavenHandler;
use Raven_Client;
use Log;

class RavenServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publish();

        $this->bootstrapRaven();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Nothing to register
    }

    /**
     * Bootstraps Raven and Monolog together
     */
    private function bootstrapRaven()
    {
        $sentryEnabled = config('sentry.enabled', false);
        $sentryDsn = config('sentry.dsn', null);

        if ($sentryEnabled === true && ! empty($sentryDsn)) {
            $client = new Raven_Client($sentryDsn);
            $handler = new RavenHandler($client);
            $handler->setFormatter(new LineFormatter("%message% %context% %extra%\n"));

            $monolog = Log::getMonolog();
            $monolog->pushHandler($handler);
        }
    }

    private function publish()
    {
        // Publishes the configuration file
        $this->publishes([
            __DIR__ . '/../../config/sentry.php' => config_path('sentry.php')
        ]);
    }
}