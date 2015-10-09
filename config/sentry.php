<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sentry switch
    |--------------------------------------------------------------------------
    |
    | Set the following value to true to enable logging via Sentry. Of course,
    | you'll have to set your DSN as well. Usually, we put the followig switch
    | along with the environment variables. Like so:
    |
    | 'enabled' => env('SENTRY_ENABLED', false)
    |
    */

    'enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | DSN
    |--------------------------------------------------------------------------
    |
    | In your Sentry dashboard, create a new project and grab your DSN from the
    | settings. Usually, this can be found under Settings -> Client Keys
    |
    | The format of the DSN is usally like this:
    | http://public:secret@example.com/1
    |
    */

    'dsn'     => '',

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | You can add Raven options as an array through this variable. A list of
    | available options can be found here:
    |
    | https://github.com/getsentry/raven-php#configuration
    |
    */

    'options' => [

        /*
        |--------------------------------------------------------------------------
        | name
        |--------------------------------------------------------------------------
        |
        | A string to override the default value for the server’s hostname.
        |
        | Defaults to Raven_Compat::gethostname().
        |
        */

        'name'          => Raven_Compat::gethostname(),

        /*
        |--------------------------------------------------------------------------
        | tags
        |--------------------------------------------------------------------------
        |
        | An array of tags to apply to events in this context.
        |
        */

        'tags'          => [],

        /*
        |--------------------------------------------------------------------------
        | curl_method
        |--------------------------------------------------------------------------
        |
        | Defaults to ‘sync’.
        |
        | Available methods:
        | - sync (default): send requests immediately when they’re made
        | - async: uses a curl_multi handler for best-effort asynchronous submissions
        | - exec: asynchronously send events by forking a curl process for each item
        |
        */

        'curl_method'   => 'sync',

        /*
        |--------------------------------------------------------------------------
        | curl_path
        |--------------------------------------------------------------------------
        |
        | Defaults to ‘curl’.
        |
        | Specify the path to the curl binary to be used with the ‘exec’ curl method.
        |
        */

        'curl_path'     => 'curl',

        /*
        |--------------------------------------------------------------------------
        | trace
        |--------------------------------------------------------------------------
        |
        | Set this to false to disable reflection tracing (function calling
        | arguments) in stacktraces.
        |
        */

        'trace'         => true,

        /*
        |--------------------------------------------------------------------------
        | logger
        |--------------------------------------------------------------------------
        |
        | Adjust the default logger name for messages.
        |
        | Defaults to `php`.
        |
        */

        'logger'        => 'php',

        /*
        |--------------------------------------------------------------------------
        | ca_cert
        |--------------------------------------------------------------------------
        |
        | The path to the CA certificate bundle.
        |
        | Defaults to the common bundle which includes getsentry.com:
        | ./data/cacert.pem
        |
        | Caveats:
        | - The CA bundle is ignored unless curl throws an error suggesting it
        | needs a cert.
        | - The option is only currently used within the synchronous curl transport.
        |
        */

        //'ca_cert'     => '',

        /*
        |--------------------------------------------------------------------------
        | curl_ssl_version
        |--------------------------------------------------------------------------
        |
        | The SSL version (2 or 3) to use. By default PHP will try to determine
        | this itself, although in some cases this must be set manually.
        |
        */

        //'curl_ssl_version'     => 3,

        /*
        |--------------------------------------------------------------------------
        | message_limit
        |--------------------------------------------------------------------------
        |
        | Defaults to 1024 characters.
        |
        | This value is used to truncate message and frame variables. However it is not guarantee that length of whole message will be restricted by this value.
        |
        */

        'message_limit' => 1024,

        /*
        |--------------------------------------------------------------------------
        | processors
        |--------------------------------------------------------------------------
        |
        | An array of classes to use to process data before it is sent to Sentry.
        | By default, Raven_SanitizeDataProcessor is used
        |
        */

        //'processors' => [],

        /*
        |--------------------------------------------------------------------------
        | processorOptions
        |--------------------------------------------------------------------------
        |
        | Options that will be passed on to a setProcessorOptions() function in a
        | Raven_Processor sub-class before that Processor is added to the list of
        | processors used by Raven_Client.
        |
        | An example of overriding the regular expressions can be found in the
        | documentation.
        |
        */

        //'processorOptions' => [],

    ]

];