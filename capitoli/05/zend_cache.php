<?php

require_once 'Zend/Cache.php';
$frontendOptions = array(
   'lifetime' => 7200, 
   'automatic_serialization' => true
);
$backendOptions = array(
    'cache_dir' => '/tmp' 
);
$cache = Zend_Cache::factory('Core',
                             'File',
                             $frontendOptions,
                             $backendOptions);
