<?php

abstract class Reader {
  protected $handle;
  protected $order;

  abstract protected function openFile($filename);

  abstract protected function readFile();

  abstract protected function closeFile();

  public function readFileToOrder($filename) {
    $this->openFile($filename);
    $this->readFile();
    $this->closeFile();

    return $order;
  }

  public function getOrder()
  {
    return $this->order;
  }
}
