<?php

/**
 * Migración v11: Ampliar campo h2 en tabla landings
 * Cambia el campo h2 de VARCHAR(100) a VARCHAR(255)
 */
class V11AmpliarCampoH2Landings {

    
    public function descripcion() {
        return "Ampliar campo h2 de VARCHAR(100) a VARCHAR(255) en tabla landings";
    }
    
    public function ejecutar() {
        $sql = "ALTER TABLE landings MODIFY COLUMN h2 VARCHAR(255)";
        db()->ejecutarConsulta($sql);
    }
}

?>
