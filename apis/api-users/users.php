<?php

$urlConnetion = realpath(dirname(__FILE__) . '/../../apis/connection/ConnectionMySQL.php');
require_once $urlConnetion;

class ApisUsers extends ConnectionMySQL
{
       function __construct()
       {
       }

       public function insert($name, $email, $password)
       {
              try {
                     $sql = "INSERT INTO users (name, email, password) values (:name, :email, :password)";
                     $statement = $this->getConnection()->prepare($sql);
                     $statement->bindParam(":name", $name, PDO::PARAM_STR);
                     $statement->bindParam(":email", $email, PDO::PARAM_STR);
                     $statement->bindParam(":password", $password, PDO::PARAM_STR);
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

       public function update($id, $name, $email, $password)
       {
              try {
                     $sql = "UPDATE users SET name = :name, email = :email, "
                            . "password = :password where id = :id";
                     $statement = $this->getConnection()->prepare($sql);
                     $statement->bindParam(":id", $id, PDO::PARAM_INT);
                     $statement->bindParam(":name", $name, PDO::PARAM_STR);
                     $statement->bindParam(":email", $email, PDO::PARAM_STR);
                     $statement->bindParam(":password", $password, PDO::PARAM_STR);
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
                     $sql = "DELETE FROM users where id = :id";
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
                     $statement = $this->getConnection()->query("SELECT * FROM users");
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
                     $statement = $this->getConnection()->query("SELECT * FROM users WHERE id = $id");
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
