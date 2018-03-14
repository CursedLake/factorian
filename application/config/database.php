<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'c5_pdo_mysql',
            'server' => '127.0.0.1',
            'database' => 'factorian',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];
