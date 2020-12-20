<?php

$urlApisUsers = realpath(dirname(__FILE__) . '/../../apis/api-users/users.php');
require_once $urlApisUsers;


class Update
{

       public function __construct()
       {
       }

       public function update()
       {
              if (isset($_GET["id"])) {
                     //get texts to update (GET)
                     $id = $_GET["id"];
                     $name = $_GET["name"];
                     $email = $_GET["email"];
                     $password = $_GET["password"];
                     $apisUsers = new ApisUsers();
                     $result = $apisUsers->update($id, $name, $email, $password);
                     echo $result;
              } else {
                     echo "texts GET are nulls";
              }
       }
}
