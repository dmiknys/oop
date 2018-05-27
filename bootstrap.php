<?php

require_once 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"),$isDevMode);

// DB

$dbParams = array(
  'driver' => 'pdo_mysql',
  'user' => 'root',
  'password' => '',
  'dbname' => 'studijos'
);

$em = EntityManager::create($dbParams, $config);
