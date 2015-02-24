<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 24/02/15
 * Time: 10:24
 */



session_start();

if(array_key_exists("userName", $_POST) && array_key_exists("password", $_POST))
{

    $db = new PDO("mysql:host=localhost; dbname=blog", "root", "troiswa");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $db->prepare("
                                INSERT INTO users(userName, password)
                                VALUES(:userName, :password);
                            ");
    $query->execute(array(
        ":userName" => $_POST["userName"],
        ":password" => password_hash($_POST["password"], PASSWORD_DEFAULT)));

    $_SESSION["userName"]= $_POST["userName"];
    $_SESSION["password"]= $_POST["password"];
    $_SESSION["id"] = $db -> lastInsertId();


    header("location: index.php");
    exit();


};



include 'view/registerTemplate.phtml';