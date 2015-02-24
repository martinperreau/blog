<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 24/02/15
 * Time: 14:07
 */


class Model_Article
{
    private $db;

    public function __construct()
    {
        $this->db = new Helper_Database();
    }

    public function getArticle($id)
    {
        $query = "SELECT * FROM articles WHERE id = :id";
        $data = array("id" => $id);
        $article = $this->db->fetchOne($query, $data);

            return $article;

    }

    public function getArticles()
    {
        $query = "SELECT * FROM articles limit 10";
        $articles = $this->db->fetchAll($query);

        return $articles;
    }

//    public function getComments()
//    {
//        $query = "SELECT * FROM comments limit 10";
//        $articles = $this->db->fetchAll($query);
//
//        return $articles;
//    }
//

}