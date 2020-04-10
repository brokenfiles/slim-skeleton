<?php

return [
    'upload_directory' => dirname(__DIR__) . '/public/assets/uploads',
    'database' => require 'database.php',
    'keys' => require 'keys.php',
    'database_connection' => true,
    'production' => false
];
