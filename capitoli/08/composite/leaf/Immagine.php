<?php

class Immagine extends Nodo {
  
  protected $imapge_path = '';
  
  public function __construct($image_path) {
    $this->imapge_path = $image_path;
  }
  
  public function getContent() {
    return $this->imapge_path;
  }
}
