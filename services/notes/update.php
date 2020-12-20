<?php

$urlApisNotes = realpath(dirname(__FILE__) . '/../../apis/api-notes/notes.php');
require_once $urlApisNotes;


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
                     $idUser = $_GET["idUser"];
                     $name = $_GET["name"];
                     $content = $_GET["content"];
                     $subject = $_GET["subject"];
                     $time = $_GET["time"];
                     $date = $_GET["date"];
                     $apiNotes = new ApisNotes();
                     $result = $apiNotes->update($id, $idUser, $name, $content, $subject, $time, $date);
                     echo $result;
              } else {
                     echo false;
              }
       }
}
