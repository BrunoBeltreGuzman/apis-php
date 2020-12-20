<?php

require_once 'IConnection.php';

class ConnectionMySQL implements IConnection
{

       //Driver, :, host=nemeHost or ip, ;, dbname=nemeDataBase, ;
       const SERVER_NAME = "mysql:host=localhost;dbname=notesbd;";
       const USER_NAME = "sa";
       const PASSWORD = "admin";

       private $connection = null;

       public function conectar()
       {
              try {
                     $this->connection = new PDO(self::SERVER_NAME, static::USER_NAME, self::PASSWORD);
                     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                     $this->connection->exec("set names utf8");
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function desConectar()
       {
              try {
                     $this->connection = null;
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function getConnection()
       {
              $this->conectar();
              return $this->connection;
       }

       public function closeConnection()
       {
              try {
                     $this->connection = null;
                     return true;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
                     return false;
              }
       }

       public function closeStatement($statement)
       {
              try {
                     $statement = null;
              } catch (Exception $exception) {
                     echo $exception->getMessage();
              }
       }

       public function printException($exception)
       {
              echo $exception->getMessage();
       }

       public function printExceptionAndMessage($exception, $message)
       {
              echo $message, "\n", "\n";
              echo $exception->getMessage();
       }

       public function printExceptionConnection()
       {
              echo $this->connection->errorInfo();
       }
}