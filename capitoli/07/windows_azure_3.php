<?php

require_once 'Microsoft/WindowsAzure/Storage/Table.php';

$storageClient = new Microsoft_WindowsAzure_Storage_Table('table.core.windows.net', 'myaccount', 'myauthkey');

$entities = $storageClient->storageClient->retrieveEntities(
    'testtable',
    $storageClient->select()
                  ->from($tableName)
                  ->where('Name eq ?', 'Mario')
                  ->andWhere('PartitionKey eq ?', 'partition1'),
    'SampleEntity'
);

foreach ($entities as $entity) {
    echo 'Nome: ' . $entity->Name . "\n";
}
