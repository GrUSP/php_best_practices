<?php

$ivSize = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($ivSize, MCRYPT_DEV_URANDOM); 
$encrypted = mcrypt_encrypt(
    MCRYPT_BLOWFISH,
    $key,
    $data,
    MCRYPT_MODE_CBC,
    $iv
);
$output = $iv . $encrypted;
