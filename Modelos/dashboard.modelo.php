<?php

class DashboardModelo {

  static public function mdlGetDatosDashboard() {
     
       $stmt = Conexion::conectar()->prepare('call prc_ObtenerDatosDashboard()');

       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_OBJ);

   }

   static public function mdlGetVentasMesActual() {
     
    $stmt = Conexion::conectar()->prepare('call prc_ObtenerVentasMesActual()');

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_OBJ);

  }

}