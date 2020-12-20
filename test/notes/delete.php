<?php

$urlNotes = realpath(dirname(__FILE__) . '/../../services/notes/delete.php');
require_once $urlNotes;

//send texts to insert (GET)
$_POST["id"] = 6;

$test = new Delete();
$test->delete();