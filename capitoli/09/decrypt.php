<?php

$ivSize = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_CBC);
$iv = substr($output, 0 ,$ivSize);
$data = mcrypt_decrypt(
    MCRYPT_BLOWFISH,
    $key,
    substr($output, $ivSize),
    MCRYPT_MODE_CBC,
    $iv
);
