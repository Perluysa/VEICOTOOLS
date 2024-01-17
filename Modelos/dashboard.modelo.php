<?php

class DashboardModelo{

  static public function mdlGetDatosDashboard(){
     
       $stmt = Conexion :: conectar()->prepare('call prc_ObtenerDatosDashboard()');

       $stmt->execute();

       return $stmt->fetcAll(PDO::FETC_OBJ);

   }
}  