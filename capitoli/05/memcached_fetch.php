<?php

$m = new Memcached();

$m->addServer('127.0.0.1', 11211);

$m->set('foo', 'bar');
$m->set('foo2', 'bar2');

$m->getDelayed(array('foo', 'foo2'), true);

while ($result = $m->fetch()) {
    var_dump($result);
}
