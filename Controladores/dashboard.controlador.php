<?php

require_once "../modelos/conexion.php";

class DashboardControlador {

    static public function ctrGetDatosDashboard(){

        $datos = DashboardModelo::mdlGetDatosDashboard(); 

        return $datos;
          
    }

}
