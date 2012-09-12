<?php

require_once 'formatter/PrimoNegozioFormatter.php';
require_once 'formatter/SecondoNegozioFormatter.php';
require_once 'formatter/TerzoNegozioFormatter.php';
require_once 'formatter/QuartoNegozioFormatter.php';
require_once 'formatter/NullStoreFormatter.php';

/**
 * Description of Sender
 *
 * @author filo
 */
class StoreFormatterFactory
{
  public function build($type)
  {
    switch ($type)
    {
      case 'primo_negozio':
        return new PrimoNegozioFormatter();
      case 'secondo_negozio':
        return new SecondoNegozioFormatter();
      case 'terzo_negozio':
        return new TerzoNegozioFormatter();
      case 'quarto_negozio':
        return new QuartoNegozioFormatter();
      default:
        return new NullStoreFormatter();
    }
  }

}
