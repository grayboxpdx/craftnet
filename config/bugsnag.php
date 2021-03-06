<?php

return [
    // Enable exception logging
    'enabled'             => true,

    // Project Server API key
    'serverApiKey'        => getenv('BUGSNAG_API_KEY'),

    // Project Browser API key
    'browserApiKey'        => '',

    // Release stage
    'releaseStage'        => 'production',

    // App version
    'appVersion'          => '',

    // Release stages to log exceptions in
    'notifyReleaseStages' => [ 'production' ],

    // Sensitive attributes to filter out, like 'password'
    'filters'             => [],

    // Metadata to send with every request
    'metaData'            => [],

    // Blacklist certain exception types like 404s
    'blacklist'            => [
        [
            'label' => '404 errors',
            'class' => function($exception) {
                if ($exception instanceof \yii\web\NotFoundHttpException && $exception->statusCode === 404) {
                    return false;
                }

                return true;
            },
        ],
    ],
];
