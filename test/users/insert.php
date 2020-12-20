<?php

$urlUsers = realpath(dirname(__FILE__) . '/../../services/users/insert.php');

require_once $urlUsers;

//send texts to insert (GET)
$_GET["name"] = "test";
$_GET["email"] = "test@example.com";
$_GET["password"] = 123;

$test = new Insert();
$test->insert();
