<?php

$sql = 'SELECT * FROM user WHERE user=:user AND password=:password';
$stmt = $dbh->prepare($sql);  // $dbh è un oggetto PDO
$stmt->bindParam(':user', $_POST['user'], PDO::PARAM_STR);
$stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
$stmt->execute();
