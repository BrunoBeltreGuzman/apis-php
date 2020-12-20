<?php

$urlUsers = realpath(dirname(__FILE__) . '/../../services/users/update.php');

require_once $urlUsers;

//send texts to insert (GET)
$_GET["id"] = 4;
$_GET["name"] = "testUpdate";
$_GET["email"] = "testUpdate@example.com";
$_GET["password"] = "testUpdate";

$test = new Update();
$test->update();