<?php

require_once "PHPUnit/Extensions/Database/TestCase.php";

require_once __DIR__.'/../../src/PostRepository.php';

/**
 * @group integration
 * @group post
*/
class PostRepositoryTest extends PHPUnit_Extensions_Database_TestCase
{
    private $pdo;

    public function getConnection()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=CIBlog', 'user', 'password');
        return $this->createDefaultDBConnection($this->pdo);
    }

    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/../fixtures/post.xml');
    }

    public function testRetrieveEventi()
  	{
	    $repo = new PostRepository($this->pdo);
        $post = $repo->findLastPost();

	    $this->assertEquals('Primo post', $post->getTitle());
    }    
}


