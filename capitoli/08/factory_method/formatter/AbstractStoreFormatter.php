<?php

/**
 * Description of AbstractStoreFormatter
 *
 * @author filo
 */
abstract class AbstractStoreFormatter
{

    protected $base_url = '#';
    protected $title = 'store';
    protected $product;
    protected $onclick;
    protected $parameters = array();

    /**
     * Gli StoreFormatter concreti devono implementare configure che popola corretamente le proprietà:
     *
     * $base_url
     * $title
     * $onClick
     * $parameters
     */
    abstract protected function configure();

    /**
     * costruisce il link verso lo store per un certo ebook
     *
     * @param eZContentObject $product l'ebook che contiene le info per costruire il link
     *
     * @return string il tag a opportunemente formattato
     */
    public function formatTag(Product $product)
    {
        $this->product = $product;
        $this->configure();
        $this->onclick = $this->onclick ? "onclick=\"{$this->onclick}\" " : 'onClick="_gaq.push([\'_trackEvent\', \'Click verso store\', \'' . addslashes($this->title) . '\', \'' . addslashes($this->getProductName()) . '\']);"';

        return '<a title="' . $this->title . '" href="' . $this->base_url . '?' . http_build_query($this->parameters) . '" ' . $this->onclick . '>';
    }

    public function getProductName()
    {
        return $this->product->getName();
    }

}
