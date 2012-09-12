<?php

class FlickrApi {

  protected $gateway;
  protected $url;
  protected $user_id;
  protected $api_key;

  public function __construct(HTTPGateway $gateway, $url, $user_id, $api_key) {
    $this->gateway = $gateway;
    $this->url = $url;
    $this->user_id = $user_id;
    $this->api_key = $api_key;
  }

  public function getPhotoSets() {
    //...
  }

  public function getPhotoSet($photoset_id) {
    //...
  }

  public function getRecentPhotos($limit = 9) {
    //...
  }

}
