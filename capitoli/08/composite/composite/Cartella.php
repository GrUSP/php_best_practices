<?php

class Cartella extends Nodo {
  
  protected $titolo = '';
  
  public function addChild($child) {
    $this->children[] = $child;
  }

  public function removeChild($position) {
    unset($this->children[$position]);
  }

  public function __construct($titolo) {
    $this->titolo = $testo;
  }
  
  protected function shorten($content)
  {
    $righe = explode(PHP_EOL, $content);
    
    return substr(trim(strip_tags($righe[0])), 0, 20);
  }
  
  public function getContent() {
    $content = $this->titolo.' \n';
    $content .= "Il contenuto di questa cartella è: ".PHP_EOL;
    
    foreach ($this->getChildren() as $child)
    {
      $content .= ' * '.get_class($child).' - '.$this->shorten($child->getContet()).PHP_EOL;
    }
    
    return $content;
  }
}
