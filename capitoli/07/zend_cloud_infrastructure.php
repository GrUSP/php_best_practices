<?php

$infrastructure = Zend_Cloud_Infrastructure_Factory::getAdapter(array(
    Zend_Cloud_Infrastructure_Factory::INFRASTRUCTURE_ADAPTER_KEY => 'Zend_Cloud_Infrastructure_Adapter_Rackspace',
    Zend_Cloud_Infrastructure_Adapter_Rackspace::RACKSPACE_USER => 'nome utente',
    Zend_Cloud_Infrastructure_Adapter_Rackspace::RACKSPACE_KEY  => ‘chiave API’
));

$data = array (
    'imageId'  => '49',
    'flavorId' => '1',
    'metadata' => array (
        'foo' => 'bar'
    )
);

$instance = $infrastructure->createInstance('test_shared',$data);

if (!$infrastructure->isSuccessful()) {
   die ('Errore: ' . $infrastructure->getErrorMsg());
}

printf ("Nome dell'istanza: %sn", $instance->getName());
printf ("Id dell'istanza  : %sn", $instance->getId());

$attributes = $instance->getAttributes();
printf ("Password di amministrazione: %sn", $attributes['adminPass']);

// oppure
printf ("Password di amministrazione: %sn", $instance->getAttribute('adminPass'));

if (!$infrastructure->rebootInstance($id)) {
    die ('Errore: ' . $infrastructure->getErrorMsg());
}

echo "Il riavvio dell'istanza $id è stato eseguito correttamente";

if ($infrastructure->waitStatusInstance($id, Zend_Cloud_Infrastructure_Instance::STATUS_RUNNING)) {
    echo "L'istanza $id è nuovamente on-line";
} else {
    echo "L'istanza $id non è ancora on-line";
}

$params= array (
    Zend_Cloud_Infrastructure_Instance::SSH_USERNAME => 'username',
    Zend_Cloud_Infrastructure_Instance::SSH_PASSWORD => 'password'
);

$cmd = 'ls -la /var/www';

$output = $infrastructure->deployInstance($id, $params, $cmd);

echo "I file presenti nella document root dell’istanza $id sono:\n";
print_r ($output);
