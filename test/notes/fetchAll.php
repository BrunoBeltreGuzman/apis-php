<?php

$urlNotes = realpath(dirname(__FILE__) . '/../../services/notes/fetchAll.php');
require_once $urlNotes;

$test = new FetchAll();
$test->fetchAll();
