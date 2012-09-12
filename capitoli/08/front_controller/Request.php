<?php

class Request {
  
  protected $get = array();
  protected $post = array();
  protected $request = array();
  
  public function __construct() {
    $this->get = $_GET;
    $this->post = $_POST;
    $this->request = $_REQUEST;
    
    return $this;
  }
  
  public function get($name)
  {
    //... cerco il parametro $name in quelli della richiesta e lo restituisco se esiste
  }
}

