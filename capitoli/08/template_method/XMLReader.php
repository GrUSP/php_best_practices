<?php

class XMLReader extends Reader {
  protected $xml;
  protected function closeFile(){}

  protected function openFile($filename) {
    $this->xml = simplexml_load_file($filename);
    if (!$this->xml) {
      throw new Exception('Cannot open ' . $filename);
    }
  }

  protected function readFile() {
    $this->order = new Order();
    $this->order->setID($this->xml->id);
    $this->order->setAmount($this->xml->amount);
    $this->order->setPrice($this->xml->price);
    $this->order->setDescription($this->xml->description);
  }

  public function openXMLFile($filename) {
    $this->readFileToOrder($filename);
    return $this->getOrder();
  }

}
