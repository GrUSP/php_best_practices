<?php

require_once 'AbstractStoreFormatter.php';

class NullStoreFormatter extends AbstractStoreFormatter
{

    protected function assertObject(Product $product)
    {
        $this->product = $product;
        $this->onclick = "do_nothing();";
    }

    protected function configure()
    {
        
    }

    public function getProductName()
    {
        return $this->product->getName();
    }

}
