<?php

class Client {
  private function getReader($type) {
    switch ($type)
    {
      case 'xml':
        return new XMLReader();
      case 'csv':
        return new XMLReader();
      default :
        throw new InvalidArgumentException('Nessun reader per file con estensione '.$type);
    }
  }
  
  /**
   * $files_info sono un array di istanze della classe SplFileInfo
   */
  public function loadOrders($files_info)
  {
    $orders = array();
    foreach($files_info as $file)
    {
      $reader = $this->getReader($file->getExtension());
      $orders[] = $reader->readFileToOrder($file->getRealPath());
    }
    
    //eseguiamo altre operazioni su $rders o semplicemente li restituiamo
  }
}
