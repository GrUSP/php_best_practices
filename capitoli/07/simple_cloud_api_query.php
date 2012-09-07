<?php

$query = $documents->select();
$query->from('collection1');
$docs = $documents->query('collection1', $query);
foreach ($docs as $doc) {
    echo "Documento: {$doc->getId()}\n";
    foreach ($doc->getFields() as $key => $value) {
        echo "\t$key => $value\n";
    }    
}
