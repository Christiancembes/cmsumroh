<?php

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'mysql' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', 3306),
            'database' => env('DB_DATABASE', 'emirates_octs'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
            'varcharmax' => 191,
        ],

        'mysql_core' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('CORE_DB_HOST', 'localhost'),
            'port' => env('CORE_DB_PORT', ''),
            'database' => env('CORE_DB_DATABASE', 'emirates'),
            'username' => env('CORE_DB_USERNAME', 'root'),
            'password' => env('CORE_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_account' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('ACCOUNT_DB_HOST', 'localhost'),
            'port' => env('ACCOUNT_DB_PORT', ''),
            'database' => env('ACCOUNT_DB_DATABASE', 'emirates'),
            'username' => env('ACCOUNT_DB_USERNAME', 'root'),
            'password' => env('ACCOUNT_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_miscellaneous' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('MISCELLANEOUS_DB_HOST', 'localhost'),
            'port' => env('DB_PORT', ''),
            'database' => env('MISCELLANEOUS_DB_DATABASE', 'emirates'),
            'username' => env('MISCELLANEOUS_DB_USERNAME', 'root'),
            'password' => env('MISCELLANEOUS_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_package' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('PACKAGE_DB_HOST', 'localhost'),
            'port' => env('PACKAGE_DB_PORT', ''),
            'database' => env('PACKAGE_DB_DATABASE', 'emirates'),
            'username' => env('PACKAGE_DB_USERNAME', 'root'),
            'password' => env('PACKAGE_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_crm' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('CRM_DB_HOST', 'localhost'),
            'port' => env('CRM_DB_PORT', ''),
            'database' => env('CRM_DB_DATABASE', 'emirates'),
            'username' => env('CRM_DB_USERNAME', 'root'),
            'password' => env('CRM_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_video' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('VIDEO_DB_HOST', 'localhost'),
            'port' => env('VIDEO_DB_PORT', ''),
            'database' => env('VIDEO_DB_DATABASE', 'emirates'),
            'username' => env('VIDEO_DB_USERNAME', ''),
            'password' => env('VIDEO_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_passport' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('PASSPORT_DB_HOST', 'localhost'),
            'port' => env('PASSPORT_DB_PORT', ''),
            'database' => env('PASSPORT_DB_DATABASE', 'emirates'),
            'username' => env('PASSPORT_DB_USERNAME', 'root'),
            'password' => env('PASSPORT_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_payments' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('PAYMENT_DB_HOST', 'localhost'),
            'port' => env('PAYMENT_DB_PORT', ''),
            'database' => env('PAYMENT_DB_DATABASE', 'emirates'),
            'username' => env('PAYMENT_DB_USERNAME', 'root'),
            'password' => env('PAYMENT_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_saving' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('SAVING_DB_HOST', 'localhost'),
            'port' => env('SAVING_DB_PORT', ''),
            'database' => env('SAVING_DB_DATABASE', 'emirates'),
            'username' => env('SAVING_DB_USERNAME', 'root'),
            'password' => env('SAVING_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_reward' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('REWARD_DB_HOST', 'localhost'),
            'port' => env('REWARD_DB_PORT', ''),
            'database' => env('REWARD_DB_DATABASE', 'emirates'),
            'username' => env('REWARD_DB_USERNAME', 'root'),
            'password' => env('REWARD_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

        'mysql_quotation' => [
            'driver'     => 'mysql',
            'engine'     => 'InnoDB',
            'host' => env('QUOTATION_DB_HOST', 'localhost'),
            'port' => env('QUOTATION_DB_PORT', ''),
            'database' => env('QUOTATION_DB_DATABASE', 'emirates_octs'),
            'username' => env('QUOTATION_DB_USERNAME', 'root'),
            'password' => env('QUOTATION_DB_PASSWORD', ''),
            'charset'    => 'utf8mb4',
            'collation'  => 'utf8mb4_unicode_ci',
            'prefix'     => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk have not actually be run in the databases.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => 'predis',
        'cluster' => false,

        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Use DB configuration for testing
    |--------------------------------------------------------------------------
    |
    | When running plugin tests OctoberCMS by default uses SQLite in memory.
    | You can override this behavior by setting `useConfigForTesting` to true.
    |
    | After that OctoberCMS will take DB parameters from the config.
    | If file `/config/testing/database.php` exists, config will be read from it,
    | but remember that when not specified it will use parameters specified in
    | `/config/database.php`.
    |
    */

    'useConfigForTesting' => env('DB_USE_CONFIG_FOR_TESTING', false),
];
