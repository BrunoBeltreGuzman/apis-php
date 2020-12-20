<?php

$urlUsers = realpath(dirname(__FILE__) . '/../../services/users/fetchAll.php');
require_once $urlUsers;

$test = new FetchAll();
$test->fetchAll();
