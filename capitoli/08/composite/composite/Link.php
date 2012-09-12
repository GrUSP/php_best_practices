<?php

class Link extends Nodo {
  
  public function __construct() {
    $this->children[0] = new Url('#');
  }

  public function addChild($child) {
    if ($child instanceof Url) {
      $this->children[0] = $child;
      
      return;
    }
    
    $this->children[] = $child;
  }

  public function removeChild($position) {
    if ($position == 0) {
      $this->children[0] = new Url('#');
    }
    
    unset($this->children[$position]);
  }

  public function getContent() {
    $children = $this->getChildren();
    $url = array_shift($children);
    
    return '<a href="'.$url->getcontent().'">'.$children->getContent().'</a>';
  }
}
