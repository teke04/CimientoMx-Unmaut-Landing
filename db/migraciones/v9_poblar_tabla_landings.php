<?php

/**
 * Migración v9: Poblar tabla landings
 * Inserta landing por defecto
 */
class V9PoblarTablaLandings {

    
    public function descripcion() {
        return "Insertar landing por defecto";
    }
    
    public function ejecutar() {
        $sql = "INSERT IGNORE INTO landings (keyword, h1, h2, meta_titulo, meta_descripcion, activa) 
            VALUES ('default', 'Integración y Automatización Industrial de Alta Fiabilidad', 'En INMAUT desarrollamos soluciones de automatización, eléctricas y mecánicas a la medida, cumpliendo los criterios y normas de calidad de la industria, con enfoque en mejora continua.', 'Soluciones industriales de automatización y control | INMAUT', 'Expertos en integración, automatización y servicios industriales personalizados para tu empresa. Calidad, innovación y mejora continua.', 1)";
        db()->ejecutarConsulta($sql);
    }
}

?>
