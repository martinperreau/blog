<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 14:57
 */
//
//session_start();
//require_once("helper/Database.class.php");
//require_once("model/User.class.php");
//
//if (array_key_exists("password", $_POST) && array_key_exists("userName", $_POST))
//{
//    // je tente de connecter l'utilisateur
//
//    $userManager = new Model_User(); // Model/User.class.php
//
//    $userManager->verifLogin($_POST["userName"], $_POST["password"]);
//
//    // redirection sur la page d'accueil
//
//
//}
//
//
//header("location: ../index.php");
//exit();



session_start();
require_once("helper/Database.class.php");
require_once("model/User.class.php");


if (array_key_exists("password", $_POST) && array_key_exists("userName", $_POST))
{
    $userManager = new Model_User();
    $user = $userManager->verifLogin($_POST["userName"], $_POST["password"]);
    var_dump($user);
    if ($user == false)
    {
        $error = "Nom d'utilisateur ou mot de passe incorrect";
    }
    else
    {
        header("Location: index.php");
        exit();
    }
}