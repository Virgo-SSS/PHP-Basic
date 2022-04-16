<?php 
require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('virgo');
$log->pushHandler(new StreamHandler('app.log', Logger::INFO));

$log->info('Hello world');
$log->info('hai hai');
?>