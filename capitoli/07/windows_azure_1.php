<?php

require_once 'Microsoft/WindowsAzure/Storage/Table.php';

$storageClient = new Microsoft_WindowsAzure_Storage_Table('table.core.windows.net', 'myaccount', 'myauthkey');

$result = $storageClient->createTable('testtable');

echo 'Nuova tabella creata: ' . $result->Name;
