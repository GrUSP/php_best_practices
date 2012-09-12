<?php

class Response {
  
  protected $content;
  protected $code;
  public $code_text = array(
                        //...
                        200 => 'OK',
                        //...
                        404 => 'Not Found',
                        //...
                      );
  
  public function __construct($content, $code = 200) {
    $this->content = $content;
    $this->code = $code;
  }
  
  public function render()
  {
    header("HTTP/1.0 ".$this->code." ".$this->code_text[$this->code]);
    
    echo $this->content;
  }
}


  

  
  