<?php

$urlApisUsers = realpath(dirname(__FILE__) . '/../../apis/api-users/users.php');
require_once $urlApisUsers;

class FetchById
{
       public function __construct()
       {
       }

       public function fetchById()
       {
              $notes = array();
              $apiNotes = new ApisUsers();
              $id = $_POST["id"];         //get id (post)
              $result = $apiNotes->fetchById($id);
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