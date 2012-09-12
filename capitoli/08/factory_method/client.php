<?php

require_once 'Product.php';
require_once 'StoreFormatterFactory.php';

$store_types = array('primo_negozio', 'secondo_negozio', 'terzo_negozio', 'quarto_negozio', null);
$factory = new StoreFormatterFactory();
$product = new Product();

foreach ($store_types as $store_type)
{
    $formatter = $factory->build($store_type);

    echo "\n";
    echo ($formatter->formatTag($product))."\n";
    echo "\n";
}


