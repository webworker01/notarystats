<?php

if(php_sapi_name() !== 'cli') {
    exit('This script is meant to be run from the command line!<br/>It can\'t be used on a webserver.');
}

require 'config.php';
require 'vendor/autoload.php';
require 'komodo.php';

set_time_limit(0);

if ($config['debug']) {
   error_reporting(E_ALL);
   ini_set('display_errors', 'on');
} else {
    error_reporting(E_ALL ^ E_NOTICE);
}

$komodo = new komodo($config);

echo "\nThis could take a while...\n\n";

$results = $komodo->getNotarizationCount();

print_r($results);