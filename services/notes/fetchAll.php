<?php

$urlApisNotes = realpath(dirname(__FILE__) . '/../../apis/api-notes/notes.php');
require_once $urlApisNotes;

class FetchAll
{
       public function __construct()
       {
       }

       public function fetchAll()
       {
              $notes = array();
              $apiNotes = new ApisNotes();
              $result = $apiNotes->fetchAll();
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
                     echo json_encode("No Notes registered");
              }
       }
}
