<?php

class Carrello
{
    const PREZZO_BURRO = 1.75;
    const PREZZO_LATTE = 1.50;
    const PREZZO_UOVA  = 0.25;

    protected $prodotti = array();
    
    public function aggiungi($prodotto, $quantita)
    {
        $this->prodotti[$prodotto] = $quantita;
    }
    
    public function quantita($prodotto)
    {
        return isset($this->prodotti[$prodotto]) ? $this->prodotti[$prodotto] : false;
    }
    
    public function totale($iva)
    {
        $totale = 0.00;
        $callback = function ($quantita, $prodotto) use ($iva, &$totale) {
            $prezzo = constant(__CLASS__ . "::PREZZO_" . strtoupper($prodotto));
            $totale += ($prezzo * $quantita) * ($iva + 1.0);
        };
        array_walk($this->prodotti, $callback);
        
        return round($totale, 2);
    }
}
