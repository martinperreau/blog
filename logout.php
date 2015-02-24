<?php
/**
 * Created by PhpStorm.
 * User: wap20
 * Date: 24/02/15
 * Time: 10:24
 */


session_start();
require_once("helper/Database.class.php");
require_once("model/User.class.php");

$userManager = new Model_User();
$userManager->logout();

header("Location: index.php");
