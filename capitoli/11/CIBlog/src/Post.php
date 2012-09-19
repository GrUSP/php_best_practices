<?php

class Post
{
  private $id;
  private $title;
  private $intro;
  private $body;
  private $image;
  private $published_at;

  public function fromArray(array $data)
  {
    $this->title              = $data['title'];
    $this->intro              = $data['intro'];
    $this->body               = $data['body'];
    $this->image              = $data['image'];
    $this->published_at       = $data['published_at'];
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getIntro()
  {
    return $this->intro;
  }

  public function getBody()
  {
    return $this->body;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getPublishedAt()
  {
    return $this->published_at;
  }
}
?>
