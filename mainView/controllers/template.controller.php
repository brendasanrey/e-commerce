<?php

  class TemplateController{
    // Metodo para llamar a la plantilla
    public function template(){
      include "views/template.php";
    }

    // Metodo para traer dinamicamente los estilos de la plantilla
    public function templateStyleController(){
      $table = "template";
      $response = TemplateModel::templateStyleModel($table);
      return $response;
    }
  }

?>