<?php

$urlApisNotes = realpath(dirname(__FILE__) . '/../../apis/api-notes/notes.php');
require_once $urlApisNotes;

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
                     $apisNotes = new ApisNotes();
                     $result = $apisNotes->delete($id);
                     echo $result;
              } else {
                     echo false;
              }
       }
}