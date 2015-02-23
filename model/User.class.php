<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 16:21
 */


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }

    public function verifLogin($userName, $password)
    {
        // récupérer l'utilisateur ayant pour login "$login" -> le stocker dans une variable $user
        // si le mot de passe en db correspond au mot de passe entré dans le formulaire
        // -> return $user
        // sinon
        // -> return false
    }
}