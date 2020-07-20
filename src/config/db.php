<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=postgres;dbname=dbtest;port=5432',
    'username' => 'postgres',
    'password' => 'dbpassword',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
