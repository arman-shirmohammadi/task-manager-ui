<?php

$database_config = (object)[
    'host'=> 'localhost',
    'user'=>'root',
    'password'=>'',
    'db'=>'7Todo'
    
];

/* Connect to a MySQL database using driver invocation */
$dsn = "mysql:dbname=$database_config->db;host=$database_config->host";
$user = $database_config->user;
$password = $database_config->password;

try {
    $pdo = new PDO($dsn, $user, $password);
 
} catch (PDOException $e) {
   diePage('Connection failed: ' . $e->getMessage()) ;
 
}

