<?php
declare(strict_types=1);
$configFile = __DIR__ . '/config.php';
if (!is_file($configFile)) { http_response_code(500); exit('Setup required: copy config.example.php to config.php and configure the database.'); }
$config = require $configFile;
try {
    $pdo = new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'].';charset=utf8mb4', $config['db_user'], $config['db_pass'], [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES=>false]);
} catch (Throwable $e) { error_log('Database connection failed: '.$e->getMessage()); http_response_code(500); exit('Database connection failed. Check config.php and database setup.'); }
if (session_status() !== PHP_SESSION_ACTIVE) { ini_set('session.use_strict_mode','1'); session_start(); }
require_once __DIR__.'/includes/functions.php';
