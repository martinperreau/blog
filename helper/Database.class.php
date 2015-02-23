<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 23/02/15
 * Time: 16:22
 */

Class Helper_Database
{
    // propriétés

    private $db;

    // methodes

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost; dbname=blog", "root", "troiswa");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->db->exec("SET NAMES UTF8");
    }

    public function fetchAll($query, $data = array())
    {
        $query = $this->db->prepare($query);
        $query->execute($data);
        $res = $query->fetchAll();

     return $res;
  }

    public function fetchOne($query, $data = array())
    {
        $query = $this->db->prepare($query);
        $query->execute($data);
        $res = $query->fetch();

        return $res;
    }


}

