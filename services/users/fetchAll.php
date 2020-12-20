<?php

$urlApisUsers = realpath(dirname(__FILE__) . '/../../apis/api-users/users.php');
require_once $urlApisUsers;

class FetchAll
{
       public function __construct()
       {
       }

       public function fetchAll()
       {
              $notes = array();
              $apisUsers = new ApisUsers();
              $result = $apisUsers->fetchAll();
              if ($result->rowCount()) {
                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $items[] = array(
                                   "id" => $row["id"],
                                   "name" => $row["name"],
                                   "email" => $row["email"],
                                   "password" => $row["password"]
                            );
                            $notes = $items;
                     }
                     echo json_encode($notes);
              } else {
                     echo json_encode("No Users registered");
              }
       }
}