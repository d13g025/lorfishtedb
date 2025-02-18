<?php

require_once '../vendor/autoload.php';
require_once '../routes/Router.php';

use Routes\Router;
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

Router::execute();
