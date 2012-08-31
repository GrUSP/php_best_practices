<?php

$data = "<results>
  <persona>
    <nome>Mario</nome>
    <cognome>Rossi</cognome>
  </persona>
  <persona>
    <nome>Maria</nome>
    <cognome>Blu</cognome>
  </persona>
  <persona>
    <nome>Franco</nome>
    <cognome>Neri</cognome>
  </persona>
</results>";

$iterator = new SimpleXMLIterator($data);
foreach($iterator as $persona)
{
  foreach($persona as $name => $value)
  {
    echo $name.': '.$value, PHP_EOL;
  }
  echo PHP_EOL;
}

?>