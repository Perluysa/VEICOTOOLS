<?php

require_once "../controladores/dashboard.controlador.php";
require_once "../modelo/dashboard.modelo.php";

class ajaxDashboard {

    public function getDatosDashboard() {
        $datos = DashboardControlador::ctrGetDatosDashboard(); // Corregido el nombre de la clase
        echo json_encode($datos);
    }

}

$datos = new ajaxDashboard();
$datos->getDatosDashboard();
