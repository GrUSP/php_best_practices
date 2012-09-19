<?php require_once dirname(__FILE__).'/../src/PostRepository.php'; ?>

<?php
        $pdo = new PDO('mysql:host=localhost;dbname=CIBlog', 'user', 'password');
        $pr    = new PostRepository($pdo); 
        $post  = $pr->findLastPost();
?>

<html>
  <head>
    <title>CIBlog</title>  
    <link rel="stylesheet" href="./css/main.css" type="text/css" />
  </head>
    <body>
    <div id="main">
        <h1 class="prepend-1">CIBlog</h1>
        <h2>Latest Post</h2>
        <div>
            <h2><?php echo $post->getTitle(); ?></h2>
            <p> <?php echo $post->getDescription(); ?></p>
        </div>
    </div>
    </body>
</html>