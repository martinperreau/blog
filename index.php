<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 13:56
 */





session_start();


    require_once("helper/Database.class.php");
    require_once("model/Article.class.php");


    $articleManager = new Model_Article();
    $articles = $articleManager->getArticles();

    include "view/accueilTemplate.phtml";


















//
//
//if(array_key_exists("name", $_SESSION)==false){
//    include "view/acceuilTemplate.phtml";
//}
//else {
//    include "view/logoutTemplate.phtml";
//}
//
//
//
//$db = new PDO("mysql:host=localhost; dbname=blog", "root", "troiswa");
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//$query = $db -> prepare("
//SELECT *
//FROM articles
//JOIN users ON users.userName = articles.userName
//");
//$query -> execute();
//$mess = $query -> fetchAll(PDO::FETCH_ASSOC);
//
//
//include "view/accueilTemplate.phtml";
