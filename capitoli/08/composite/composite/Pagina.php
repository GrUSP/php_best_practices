<?php

class Pagina extends Nodo {
  
  protected $titolo = '';
  protected $descrizione = '';
  
  public function addChild($child) {
    $this->children[] = $child;
  }

  public function removeChild($position) {
    unset($this->children[$position]);
  }

  public function __construct($titolo, $descrizione) {
    $this->titolo = $testo;
    $this->descrizione = $testo;
  }
  
  public function getContent() {
    $content = $this->titolo.' \n';
    $content .= $this->descrizione.' \n';
    
    return parent::getContent();
  }
}

