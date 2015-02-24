<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 24/02/15
 * Time: 10:24
 */




session_start();

if(array_key_exists("title", $_POST) && array_key_exists("content", $_POST))
{

    $db = new PDO("mysql:host=localhost; dbname=blog", "root", "troiswa");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $db->prepare("
                                INSERT INTO articles(title, content, id_author)
                                VALUES(:title, :content, :id_author);
                            ");
    $query->execute(array(
        ":title" => $_POST["title"],
        ":content" => $_POST["content"],
        ":id_author" => $_SESSION["id"]));



    header("Location: index.php");
    exit();
};



include 'view/createArticleTemplate.phtml';