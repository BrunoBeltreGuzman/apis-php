<?php

$urlApisUsers = realpath(dirname(__FILE__) . '/../../apis/api-users/users.php');
require_once $urlApisUsers;


class Insert
{

       public function __construct()
       {
       }

       public function insert()
       {
              if (isset($_GET["name"])) {
                     //get texts to insert (GET)
                     $name = $_GET["name"];
                     $email = $_GET["email"];
                     $password = $_GET["password"];
                     $apisUsers = new ApisUsers();
                     $result = $apisUsers->insert($name, $email, $password);
                     echo $result;
              } else {
                     echo "texts GET are nulls";
              }
       }
}