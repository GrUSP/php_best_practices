<?php

list($hmac, $iv, $encrypted)= explode(':',$output);
$iv = base64_decode($iv);
$encrypted = base64_decode($encrypted);
$macKey = mhash_keygen_s2k(MHASH_SHA256, $key, $iv, 32);
$newHmac= hash_hmac('sha256', $iv . MCRYPT_BLOWFISH . $encrypted, $macKey);
if ($hmac!==$newHmac) {
    die('Autenticazione fallita, impossibile procedere.');
}
$decrypt = mcrypt_decrypt(
    MCRYPT_BLOWFISH,
    $key,
    $encrypted,
    MCRYPT_MODE_CBC,
    $iv
);
$data = rtrim($decrypt, "\0"); 
