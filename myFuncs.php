<?php

    function dump($data){
        echo '<pre>';
        var_dump($data);
        echo '</pre><hr>';
    }
    
    function uploadImage($image){

        $extension=pathinfo($image[name], PATHINFO_EXTENSION);
        $filename= uniqid().".".$extension;
        
        move_uploaded_file($image['tmp_name'], "uploadImg/".$filename);
        return $filename;
    }
    
    function addPost($content,$title,$filename){
        $pdo = new PDO("mysql:host=localhost;dbname=marlin","root","root");
        $sql = "INSERT INTO posts (title,content,image) VALUES (:title, :content, :image) ";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":content", $content);
        $statement->bindParam(":image", $filename);
        $statement->execute();
    }
    
    function readDbTablePosts(){
        $pdo = new PDO("mysql:host=localhost;dbname=marlin","root","root");
        $sql = "SELECT * FROM posts";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC); 
        return $posts;
    }