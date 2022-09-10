<?php
include 'myFuncs.php';

dump($_POST);
dump($_FILES);
exit();

$pdo=new PDO("mysql:host=localhost;dbname=marlin", "root", "root");
dump($pdo);
$sql="INSERT INTO posts(title, content) VALUES(:title, :content)";
$statement = $pdo->prepare($sql);
$statement->bindParam(":title", $_POST['title']);
$statement->bindParam(":content", $_POST['content']);
$statement->execute();