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
	| In your Sentry dashboard, create a new project and grab your DNS from the
    | settings. Usually, this can be found under Settings -> Client Keys
    |
    | The format of the DSN is usally like this:
    | https://***:***@sentry.yourdomain.com/{project}
	|
	*/
    'dsn'     => ''

];