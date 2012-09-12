<?php

class Testo extends Nodo {
  
  protected $testo = '';
  
  public function __construct($testo) {
    $this->testo = $testo;
  }
  
  public function getContent() {
    return $this->testo;
  }
}
