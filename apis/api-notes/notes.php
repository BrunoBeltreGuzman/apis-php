<?php


$urlConnetion = realpath(dirname(__FILE__) . '/../../apis/connection/ConnectionMySQL.php');
require_once $urlConnetion;

class ApisNotes extends ConnectionMySQL
{
       function __construct()
       {
       }

       public function insert($idUser, $name, $content, $subject, $time, $date)
       {
              try {
                     $sql = "INSERT INTO notes (idUser, name, content, subject, time, date) values (:idUser, :name, :content, :subject, :time, :date)";
                     $statement = $this->getConnection()->prepare($sql);
                     $statement->bindParam(":idUser", $idUser, PDO::PARAM_INT);
                     $statement->bindParam(":name", $name, PDO::PARAM_STR);
                     $statement->bindParam(":content", $content, PDO::PARAM_STR);
                     $statement->bindParam(":subject", $subject, PDO::PARAM_STR);
                     $statement->bindParam(":time", $time, PDO::PARAM_STR);
                     $statement->bindParam(":date", $date, PDO::PARAM_STR);
                     $statement->execute();
                     return true;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Messge");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }

       public function update($id, $idUser, $name, $content, $subject, $time, $date)
       {
              try {
                     $sql = "UPDATE notes SET idUser = :idUser, name = :name, content = :content, subject = :subject, time = :time, date = :date where id = :id";
                     $statement = $this->getConnection()->prepare($sql);
                     $statement->bindParam(":id", $id, PDO::PARAM_INT);
                     $statement->bindParam(":idUser", $idUser, PDO::PARAM_INT);
                     $statement->bindParam(":name", $name, PDO::PARAM_STR);
                     $statement->bindParam(":content", $content, PDO::PARAM_STR);
                     $statement->bindParam(":subject", $subject, PDO::PARAM_STR);
                     $statement->bindParam(":time", $time, PDO::PARAM_STR);
                     $statement->bindParam(":date", $date, PDO::PARAM_STR);
                     $statement->execute();
                     return true;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Messge");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }

       public function delete($id)
       {
              try {
                     $sql = "DELETE FROM notes where id = :id";
                     $statement = $this->getConnection()->prepare($sql);
                     $statement->bindParam(":id", $id, PDO::PARAM_INT);
                     $statement->execute();
                     return true;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Messge");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }


       public function fetchAll()
       {
              try {
                     $statement = $this->getConnection()->query("SELECT * FROM notes");
                     return $statement;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Message");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }

       public function fetchById($id)
       {
              try {
                     $statement = $this->getConnection()->query("SELECT * FROM notes WHERE id = $id");
                     return $statement;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Message");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }

       public function fetchByIdUser($idUser)
       {
              try {
                     $statement = $this->getConnection()->query("SELECT * FROM notes WHERE idUser = $idUser");
                     return $statement;
              } catch (Exception $exception) {
                     $this->printException($exception);
                     $this->printExceptionConnection();
                     $this->printExceptionAndMessage($exception, "Message");
                     return false;
              } finally {
                     $this->closeStatement($statement);
                     $this->closeConnection();
              }
       }
}
