<?php

class FrontController
{
  protected $routing;
  
  public function __construct(Routing $routing) {
    
    $this->routing = $routing;
  }
  
  public function handle(Request $request) {
    
    $action = $this->routing->getAction($request);
    
    return $action->execute($request);
  }
}
