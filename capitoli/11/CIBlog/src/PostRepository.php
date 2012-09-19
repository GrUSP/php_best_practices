<?php
require_once 'Post.php';

class PostRepository
{
  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function findLastPost()
  {
    $q = sprintf("SELECT * FROM Post ORDER BY published_at DESC LIMIT 1");

    $result = $this->pdo
                   ->query($q)
                   ->fetch(PDO::FETCH_ASSOC);

    $post = new Post();
    $post->fromArray($result);
    
    return $post;
  }
}