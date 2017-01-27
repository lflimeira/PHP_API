<?php

#This class is responsible for the connection with the Database.
class ConnectionDB {
   
      #Declare our attribute that will receive the instance of database.
      public static $instance;
   
      private function __construct() {
          //
      }
   
      #Create the method that will make the connection with the database and will set this connection in the attribute "instance".
      public static function getInstance() {
          #Verify if the attribute already have a connection set in it.
          if (!isset(self::$instance)) {
              #Create a new PDO object and make the connection with database.
              self::$instance = new PDO('mysql:host=localhost;dbname=api', 'root', '123', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          }
          #Return the attribute with the connection setted in it.
          return self::$instance;
      }
   
  }

?>