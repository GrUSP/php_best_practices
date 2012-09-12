<?php

require_once 'AbstractStoreFormatter.php';


class TerzoNegozioFormatter extends AbstractStoreFormatter
{
  protected function configure()
  {
    $this->base_url = 'http://www.terzonegozio.it/search';
    $this->title = 'Terzo Negozio';
    $this->parameters = array('q' => $this->getProductName());
  }
}
