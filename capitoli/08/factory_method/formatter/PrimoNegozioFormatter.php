<?php

require_once 'AbstractStoreFormatter.php';


class PrimoNegozioFormatter extends AbstractStoreFormatter
{
  protected function  configure()
  {
    $this->base_url = 'http://www.primonegozio.it/download/ricerca';
    $this->title = 'Primo Negozio';
    $this->onclick = '_gaq.push([\'_trackEvent\', \'Click verso ebook store\', \''.
                     addslashes($this->title).'\', \''.
                     addslashes($this->getProductName()).'\']);'.
                     'primo_negozio_submit_form(\''.
                     addslashes($this->getProductName()).
                     '\', \'http://www.primonegozio.it/download/ricerca\'); return false;';
  }
}
