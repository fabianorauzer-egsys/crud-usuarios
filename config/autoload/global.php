<?php

/** Global Configuration Override */

return [
    'db' => [
        'driver' => 'Pdo',
        'host' => 'localhost',
        'database' => 'db_crud_usuario',
        'username' => 'postgres',
        'password' => 'Info@3004',
    ],
    'mail' => [
        'name'              => 'smtp.mailtrap.io',
        'host'              => 'smtp.mailtrap.io',
        'port'              => 2525,
        'connection_class'  => 'login',
        'connection_config' => [
            'from'     => 'zf3@teste.com',
            'username' => '764551a3018d7c',
            'password' => '3d775f8950a315',
            'auth'    => 'CRAM-MD5',
        ],
    ],
];
