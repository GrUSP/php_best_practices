<?php

Class Persona
{
  public $nome;
  public $cognome;
  
  public function __toString()
  {
    return $this->nome.' '.$this->cognome;
  }
  
  public function store(SplSubject $subject)
  {
    $subject->handle($this);
    // Qui si può salvare l'elemnto su database
  }
}

Class StoreHandler implements SplSubject
{
  private $observers = array();
  public $object;
  
  public function attach(SplObserver $observer){
    $id = spl_object_hash($observer);
    $this->observers[$id] = $observer;
  }
  
  public function detach(SplObserver $observer){
    $id = spl_object_hash($observer);
    unset($this->observers[$id]);
  }
  
  public function notify(){
    foreach($this->observers as $observer)
    {
      $observer->update($this);
    }
  }
  
  public function handle($object)
  {
    $this->object = $object;
    $this->notify();
  }
}

Class Logger implements SplObserver
{
  public function update(SplSubject $subject)
  {
    error_log('Salvato elemento '.(string)$subject->object);
  }
}

$event_handler = new StoreHandler();
$event_handler->attach(new Logger());

$persona = new Persona();
$persona->nome = 'Mario';
$persona->cognome = 'Rossi';
$persona->store($event_handler);


?>