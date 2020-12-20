<?php

$urlNotes = realpath(dirname(__FILE__) . '/../../services/notes/fetchById.php');
require_once $urlNotes;


$_POST["id"] = 2;    //send id (post)

$test = new FetchById();
$test->fetchById();