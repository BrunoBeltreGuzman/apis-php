<?php

$urlNotes = realpath(dirname(__FILE__) . '/../../services/notes/insert.php');
require_once $urlNotes;

//send texts to update (GET)
$_GET["idUser"] = 4;
$_GET["name"] = "test";
$_GET["content"] = "test";
$_GET["subject"] = "test";
$_GET["time"] = "11:00:00";
$_GET["date"] = "2020-12-31";

$test = new Insert();
$test->insert();