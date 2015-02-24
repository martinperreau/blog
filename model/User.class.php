<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 16:21
 */

class Model_User
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }

    public function verifLogin($login, $password)
    {
        $query = "SELECT * FROM users WHERE userName = :userName";
        $data = array("userName" => $login);
        $user = $this->db->fetchOne($query, $data);
        if (password_verify($password, $user["password"])) {
            $_SESSION["id"] = $user["id"];
            $_SESSION["password"] = $user["password"];
            $_SESSION["userName"] = $user["userName"];
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_destroy();
    }
}