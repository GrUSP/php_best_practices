<?php

class Order
{
    public $number;
    protected $type;

    public function toXml(){
        return '<?xml version="1.0" encoding="UTF-8"?><ordine><numero>85</numero>...</catalogo>';
    }

    public function getType(){
        return $type;
    }

    public function setType($type){
        $this->type = $type;
    }
}
