<?php

$urlApisNotes = realpath(dirname(__FILE__) . '/../../apis/api-notes/notes.php');
require_once $urlApisNotes;

class FetchById
{
       public function __construct()
       {
       }

       public function fetchById()
       {
              $notes = array();
              $apiNotes = new ApisNotes();
              $id = $_POST["id"];         //get id (post)
              $result = $apiNotes->fetchById($id);
              if ($result->rowCount()) {
                     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                            $items[] = array(
                                   "id" => $row["id"],
                                   "idUser" => $row["idUser"],
                                   "name" => $row["name"],
                                   "content" => $row["content"],
                                   "subject" => $row["subject"],
                                   "time" => $row["time"],
                                   "date" => $row["date"]
                            );
                            $notes = $items;
                     }
                     echo json_encode($notes);
              } else {
                     echo json_encode("No hay elementos");
              }
       }
}