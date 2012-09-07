<?php

require_once 'Zend/Cache/Manager.php';
$manager = new Zend_Cache_Manager();

$dbCache = array(
    'frontend' => array(
        'name' => 'Core',
        'options' => array(
            'lifetime' => 600,
            'automatic_serialization' => true
        )
    ),
    'backend' => array(
        'name' => 'File',
        'options' => array(
            'cache_dir' => '/tmp'
        )
    )
);

$confCache = array(
    'frontend' => array(
        'name' => 'Core',
        'options' => array(
            'lifetime' => 7200,
            'automatic_serialization' => true
        )
    ),
    'backend' => array(
        'name' => 'Apc'
    )
);

$manager->setCacheTemplate('database', $dbCache);
$manager->setCacheTemplate('config',$confCache);

$databaseCache = $manager->getCache('database');
$configCache = $manager->getCache('conf');

