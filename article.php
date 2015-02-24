<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 24/02/15
 * Time: 12:09
 */

// aller chercher ds la base les 5 derniers artciles



session_start();
require_once("helper/Database.class.php");
require_once("model/Article.class.php");

$articleManager = new Model_Article();
$article = $articleManager->getArticle($_GET["id"]);


include 'view/OneArticletemplate.phtml';
