<?php

$params = array (
    Zend_Cloud_Infrastructure_Instance::SSH_USERNAME => 'username',
    Zend_Cloud_Infrastructure_Instance::SSH_PASSWORD => 'password'
);

$cmd = array (
    'apt-get install apache2 php5 libapache2-mod-php5 mysql-server libapache2-mod-auth-mysql php5-mysql',
    'echo "<?php phpinfo();" > /var/www/test.php'
);

$output = $infrastructure->deployInstance($id, $params, $cmd);

if (!$infrastructure->isSuccessful()) {
   die ('Errore: ' . $infrastructure->getErrorMsg());
}

$ip = $infrastructure->getPublicDnsInstance($id);
echo "Per verificare l'installazione vai su http://$ip/test.php";
