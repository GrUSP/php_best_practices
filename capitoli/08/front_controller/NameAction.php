<?php

class NameAction implements ActionInterface {
  
  public function execute(Request $request) {
    $name = $request->get('name');
    
    $content = "<html>".
                 "<body>".
                    "<h1>The given name is ".$name."</h1>".
                 "</body>".
               "</html>";
    
    return new Response($content);
  }
  
}