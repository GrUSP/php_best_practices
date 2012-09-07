<?php

$sql = 'SELECT * FROM table where id=xxx';
$key = md5($sql);

if (!$result = $cache->load($key)) {
    // accesso al database tramite Zend_Db
    require_once 'Zend/Db.php';
    $db = Zend_Db::factory('...');
    $result = $db->fetchAll($sql);
    // aggiorno il dato in cache
    $cache->save($result, $key);
}

var_dump($result);
