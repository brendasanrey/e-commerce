<?php
  require_once "connection.php";

  class TemplateModel{
    // static porque recibe parametros
    static public function templateStyleModel($table){
      $newConnection = Connection::Connect() -> prepare("SELECT * FROM $table");

      $newConnection -> execute();
      return $newConnection -> fetch();

      $newConnection -> close();

    }
  }
?>