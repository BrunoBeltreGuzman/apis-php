<?php

$urlUsers = realpath(dirname(__FILE__) . '/../../services/users/delete.php');
require_once $urlUsers;

//send texts to insert (GET)
$_POST["id"] = 4;

$test = new Delete();
$test->delete();