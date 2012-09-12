<?php

abstract class Nodo {
  
  protected $children = array();
  
  public function addChild($child) {
    throw new OperationNotPermittedException('Errore: '.get_class($this).' non può contenere figli');
  }
  
  public function removeChild($position) {
    throw new OperationNotPermittedException('Errore: '.get_class($this).' non contiene figli');
  }
  
  public function getChildren() {
    return $this->children;
  }
  
  public function getContent() {
    $content = '';
    foreach ($this->getChildren() as $child) {
      $content .= $child->getContent();
    }
    
    return $content;
  }
}
