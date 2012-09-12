<?php

class Routing {
  
  public function getAction(Request $request) {
    
    switch ($request->get('action')) {
      case 'name':
        return new NameAction();
      default:
        return new NotAvailableAction();
    }
            
  }
}
