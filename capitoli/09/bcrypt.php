<?php

$salt = substr(str_replace('+',  '.', base64_encode(openssl_random_pseudo_bytes(16))), 0, 22);
$hash = crypt($password, '$2a$' . $workload . '$' . $salt);
