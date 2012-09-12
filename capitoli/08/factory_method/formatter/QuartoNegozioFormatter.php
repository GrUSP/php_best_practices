<?php

require_once 'AbstractStoreFormatter.php';


class QuartoNegozioFormatter extends AbstractStoreFormatter
{
  protected function configure()
  { 
    $this->base_url = 'http://www.quartonegozio.it/ricerca.aspx';
    $this->title = 'Quarto Negozio';
    $this->parameters = array('t' => 't', 
                              'q' => $this->getProductName());
  }
}
