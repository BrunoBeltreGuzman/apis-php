<?php

$urlUsers = realpath(dirname(__FILE__) . '/../../services/users/fetchById.php');
require_once $urlUsers;


$_POST["id"] = 1;    //send id (post)

$test = new FetchById();
$test->fetchById();
