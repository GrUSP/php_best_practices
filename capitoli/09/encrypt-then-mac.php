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
$macKey = mhash_keygen_s2k(MHASH_SHA256, $key, $iv, 32);
$hmac = hash_hmac('sha256', $iv . MCRYPT_BLOWFISH . $encrypted, $macKey);
$output = $hmac . ':' . base64_encode($iv) . ':' . base64_encode($encrypted);
