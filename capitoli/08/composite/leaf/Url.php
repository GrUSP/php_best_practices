<?php

class Url extends Nodo {
  
  protected $url = '#';

  public function __construct($url) {
    $this->url = $url;
  }
  
  public function getContent() {
    return $this->url;
  }
}
