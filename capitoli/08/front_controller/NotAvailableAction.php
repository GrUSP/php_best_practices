<?php

class NotAvailableAction {
  
  public function execute(Request $request) {
    $name = $request->get('name');
    
    $content = "<html>".
                 "<body>".
                    "ERROR: The given action is not available!".
                 "</body>".
               "</html>";
    
    return new Response($content, 404);
  }
}