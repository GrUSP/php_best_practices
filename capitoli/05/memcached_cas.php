<?php

$m = new Memcached();
$m->addServer('127.0.0.1', 11211);

do {
   $ips = $m->get('ips', null, $cas);
   if ($m->getResultCode() == Memcached::RES_NOTFOUND) {
      $ips = array($_SERVER['REMOTE_ADDR']);
      $m->add('ips', $ips);
   } else {
      $ips[] = $_SERVER['REMOTE_ADDR'];
      $m->cas($cas, 'ips', $ips);
   }
} while ($m->getResultCode() != Memcached::RES_SUCCESS);
