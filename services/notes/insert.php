<?php

$urlApisNotes = realpath(dirname(__FILE__) . '/../../apis/api-notes/notes.php');
require_once $urlApisNotes;

class Insert
{

       public function __construct()
       {
       }

       public function insert()
       {
              if (isset($_GET["idUser"])) {
                     //get texts to insert (GET)
                     $idUser = $_GET["idUser"];
                     $name = $_GET["name"];
                     $content = $_GET["content"];
                     $subject = $_GET["subject"];
                     $time = $_GET["time"];
                     $date = $_GET["date"];
                     $apiNotes = new ApisNotes();
                     $result = $apiNotes->insert($idUser, $name, $content, $subject, $time, $date);
                     echo $result;
              } else {
                     echo false;
              }
       }
}