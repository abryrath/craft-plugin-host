<?php

return [
    'common' => [
        'remoteWorkingDir' => '/home/abry/Union/Sites/craft-plugin-host.com/',
        'localWorkingDir' => '/app',
        'ignoreTables' => [
            "craft_templatecaches",
            "craft_templatecachequeries",
            "craft_templatecacheelements",
            "craft_sessions",
            "craft_cache",
        ],
        'driver' => 'mysql',
        'port' => 22,
    ],
    'local' => [
        'docker' => true,
        'dockerDatabase' => [
            'port' => 5432,
            'host' => '127.0.0.1',
        ],
    ],
    'production_postgres' => [
        'docker' => true,
        'user' => 'abry',
        'host' => 'highwoods.abryrath.com',
        'identity' => '$HOME/.ssh/id_rsa',
        'driver' => 'pgsql',
        'dockerDatabase' => [
            'port' => 5432,
            'host' => '127.0.0.1',
        ],
    ],
    'production_mysql' => [
        'docker' => true,
        'user' => 'abry',
        'host' => 'highwoods.abryrath.com',
        'identity' => '$HOME/.ssh/id_rsa',
        'driver' => 'mysql',
        'dockerDatabase' => [
            'port' => 3336,
            'host' => '127.0.0.1',
        ],
    ],

];
