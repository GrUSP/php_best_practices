<?php

// Inizializzo la classe AmazonS3
$s3 = new AmazonS3();

// Creo un bucket per la memorizzazione di un file
$response = $s3->create_bucket('my-bucket', AmazonS3::REGION_US_E1);
if (!$response->isOK()) {
    die('Errore durante la creazione del bucket');
}
$data = file_get_contents('/my/local/dir/picture.jpg');
$response = $s3->create_object('my-bucket', 'picture.jpg', array(
    'body' => $data
));
if (!$response->isOK()) {
    die('Errore durante la memorizzazione del file');
}
echo "Il file è stato memorizzato con successo";