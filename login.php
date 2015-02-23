<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 14:57
 */

session_start();

require_once("helper/Database.class.php");
require_once("model/User.class.php");

if (array_key_exists("password", $_POST) && array_key_exists("userName", $_POST))
{
    // je tente de connecter l'utilisateur

    $userManager = new Model_User(); // Model/User.class.php

    if ($userManager->verifLogin($_POST["userName"], $_POST["password"]) != false)
    {
        if($res != false){

            if(password_verify($_POST["password"], $res["password"]))
            {
                $_SESSION["name"] = $res["name"];
                $_SESSION["id"] = $res["id"];

            }
            else {
                $_SESSION["error"] = "Mot de passe incorrect" ;

            }
        }
        else {
            $_SESSION["error"] = "utilisateur inconnu" ;
        }
    }


}



header("location: index.php");
exit();

