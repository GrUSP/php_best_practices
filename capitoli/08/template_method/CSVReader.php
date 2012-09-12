<?php

class CSVReader extends Reader {

  protected function closeFile() {
    fclose($this->handle);
  }

  protected function openFile($filename) {
    $this->handle = fopen($filename, "r");
    if (!$this->handle) {
      throw new Exception('Cannot open ' . $filename);
    }
  }

  protected function readFile() {
    $data = fgetcsv($this->handle);

    $this->order = new Order();
    $this->order->setID($data[0]);
    $this->order->setAmount($data[1]);
    $this->order->setPrice($data[2]);
    $this->order->setDescription($data[3]);
  }

  public function openCSVFile($filename) {
    $this->readFileToOrder($filename);
    return $this->getOrder();
  }

}
