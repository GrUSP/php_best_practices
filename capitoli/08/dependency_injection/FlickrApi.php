<?php

class FlickrApi {

  protected $curl;
  protected $url;
  protected $user_id;
  protected $api_key;

  public function __construct() {
    $this->curl = new CurlWrapper();
    $this->url = '';
    $this->user_id = 'myuser';
    $this->api_key = 'myapikey';
  }
  
  protected function loadDomDocument($url) {
    $dom = new \DOMDocument();
    $dom->loadXML($this->curl->get($url));
    if (!$this->isValidResponse($dom) || $this->curl->hasError()) {
      throw new \Exception('Error callling ' . $url);
    }

    return $dom;
  }
  
  public function getRecentPhotos($limit = 9) {
    $results = $this->curl->get($this->buildBaseUrl('flickr.photos.search', '&per_page=' . $limit . '&extras=path_alias,url_sq,url_t,url_s,url_m,url_z,url_l,url_o'));
    $xml = \simplexml_load_string($results);

    if (!$xml || count($xml->photos->photo) <= 0) {
      return null;
    }

    return $xml->photos;
  }
  
  protected function buildBaseUrl($method, $extra_parameters = '') {
    return $this->url . 'method=' . $method . '&api_key=' . $this->api_key . '&user_id=' . $this->user_id . $extra_parameters;
  }

}
