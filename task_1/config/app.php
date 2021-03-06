<?php
require_once(__DIR__ . '/../vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

require_once(__DIR__ . '/helpers.php');
require_once(__DIR__ . '/db.php');
require_once(__DIR__ . '/routes.php');
