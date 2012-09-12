<?php

require_once 'AbstractStoreFormatter.php';


class SecondoNegozioFormatter extends AbstractStoreFormatter
{
  protected function configure()
  {
    $this->base_url = 'http://www.secondonegozio.it/search/';
    $this->title = 'Secondo Negozio';
    $this->parameters = array('keywords' => $this->getProductName());
  }
}
