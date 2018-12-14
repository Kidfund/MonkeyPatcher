<?php

use Composer\Autoload\ClassLoader;

include_once dirname(__FILE__).'/../vendor/autoload.php';

$classLoader = new ClassLoader();

$classLoader->addPsr4('classes\\', dirname(__FILE__).'/classes', true);
$classLoader->register();
