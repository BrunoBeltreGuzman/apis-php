<?php

$urlNotes = realpath(dirname(__FILE__) . '/../../services/notes/update.php');
require_once $urlNotes;

//send texts to update (GET)
$_GET["id"] = 4;
$_GET["idUser"] = 4;
$_GET["name"] = "testUpdate";
$_GET["content"] = "testUpdate";
$_GET["subject"] = "testUpdate";
$_GET["time"] = "11:00:00";
$_GET["date"] = "2020-12-31";

$test = new Update();
$test->update();