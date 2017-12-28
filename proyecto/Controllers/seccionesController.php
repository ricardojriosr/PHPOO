<?php
namespace Controllers;

use Models\Seccion as Secciones;

class seccionesController {

  public function __construct() {
      $this->secciones = new Secciones();
  }

  public function index() {
      $datos = $this->secciones->listar();
      return $datos;
  }




}
?>
