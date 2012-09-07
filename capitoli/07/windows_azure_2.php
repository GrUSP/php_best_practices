<?php

require_once 'Microsoft/WindowsAzure/Storage/Table.php';

$entity = new SampleEntity ('partition1', 'row1');
$entity->FullName = "Mario";
$entity->Age = 35;
$entity->Visible = true;

$storageClient = new Microsoft_WindowsAzure_Storage_Table('table.core.windows.net', 'myaccount', 'myauthkey');

$result = $storageClient->insertEntity('testtable', $entity);

echo 'Timestamp: ' . $result->getTimestamp() . "\n";
echo 'Etag: ' . $result->getEtag() . "\n";
