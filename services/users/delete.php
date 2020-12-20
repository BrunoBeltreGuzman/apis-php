<?php

$urlApisUsers = realpath(dirname(__FILE__) . '/../../apis/api-users/users.php');
require_once $urlApisUsers;

class Delete
{

       function __construct()
       {
       }

       public function delete()
       {
              if (isset($_POST["id"])) {
                     //get text id to delete (POST)
                     $id = $_POST["id"];
                     $apisUsers = new ApisUsers();
                     $result = $apisUsers->delete($id);
                     echo $result;
              } else {
                     echo "text id GET is null";
              }
       }
}
