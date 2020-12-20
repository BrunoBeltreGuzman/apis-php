<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface IConnection
{

       public function conectar();

       public function desConectar();

       public function getConnection();

       public function closeStatement($statement);

       public function closeConnection();

       public function printException($exception);

       public function printExceptionConnection();

       public function printExceptionAndMessage($exception, $message);
}
