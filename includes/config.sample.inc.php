<?php
$config = [
    'servers' => [
        [
            'name' => 'name',
            'host' => '127.0.0.1',
            'port' => 6379,
            'auth' => '123456',
//            'db'        => 2, // 只能看几库
//            'databases' => 5, // 只能看前几个库
//            'filter'    => '*', // 筛选 [筛选值*]
//            'scheme' => 'tcp',
//            'path' => '',
        ],
    ],


    'seperator' => ':',

    // Uncomment to show less information and make phpRedisAdmin fire less commands to the Redis server. Recommended for a really busy Redis server.
    //'faster' => true,

//    'login' => [
//        'admin' => [
//            'password' => '123456',
//        ],
//        'guest' => [
//            'password' => '123456',
//            'servers' => [1],
//        ],
//    ],

    // Use HTML form/cookie-based auth instead of HTTP Basic/Digest auth
    'cookie_auth' => false,


    /*'serialization' => array(
      'foo*' => array( // Match like KEYS
        // Function called when saving to redis.
        'save' => function($data) { return json_encode(json_decode($data)); },
        // Function called when loading from redis.
        'load' => function($data) { return json_encode(json_decode($data), JSON_PRETTY_PRINT); },
      ),
    ),*/


    // You can ignore settings below this point.

    'maxkeylen' => 100,
    'count_elements_page' => 100,

    // Use the old KEYS command instead of SCAN to fetch all keys.
    'keys' => false,

    // How many entries to fetch using each SCAN command.
    'scansize' => 1000
];
