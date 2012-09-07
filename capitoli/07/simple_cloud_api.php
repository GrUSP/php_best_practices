<?php

$adapterClass = 'Zend_Cloud_DocumentService_Adapter_SimpleDb';
$documents = Zend_Cloud_DocumentService_Factory::getAdapter(array(
        Zend_Cloud_DocumentService_Factory::DOCUMENT_ADAPTER_KEY    => $adapterClass,
        Zend_Cloud_DocumentService_Adapter_SimpleDb::AWS_ACCESS_KEY => $amazonKey,
        Zend_Cloud_DocumentService_Adapter_SimpleDb::AWS_SECRET_KEY => $amazonSecret
    ));

$document = new Zend_Cloud_DocumentService_Document(array(
    'chiave1' => 'valore1',
    'chiave2' => 'valore2',
), "documento1");

$document2 = new Zend_Cloud_DocumentService_Document(array(
    'chiave1' => 'valore1',
    'chiave2' => 'valore2',
), "documento2");

$documents->insertDocument('collection1', $document2);
