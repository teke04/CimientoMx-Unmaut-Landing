<?php

/**
 * Migración v8: Poblar tabla servicios
 * Inserta servicios de ejemplo
 */
class V8PoblarTablaServicios {

    
    public function descripcion() {
        return "Insertar servicios de ejemplo";
    }
    
    public function ejecutar() {
        $servicios = ['Servicios de Automatización', 'Servicios Eléctricos', 'Servicios Mecánicos'];
        
        foreach ($servicios as $servicio) {
            $sql = "INSERT IGNORE INTO servicios (servicio) VALUES (:servicio)";
            db()->ejecutarConsulta($sql, [':servicio' => $servicio]);
        }
    }
}

?>
