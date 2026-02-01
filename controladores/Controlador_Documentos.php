<?php
class Controlador_Documentos extends Controlador {

    public function sitemap() {
        // Limpiar TODOS los output buffers
        while (ob_get_level()) {
            ob_end_clean();
        }
        
        // Establecer header para XML
        header("Content-Type: application/xml; charset=utf-8");
        
        // Sitemap hardcodeado
        echo '<?xml version="1.0" encoding="UTF-8"?>';
        echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        echo '<url>';
        echo '<loc>' . env('DOMINIO') . '</loc>';
        echo '<lastmod>' . date('Y-m-d') . '</lastmod>';
        echo '<changefreq>daily</changefreq>';
        echo '<priority>1.0</priority>';
        echo '</url>';
        echo '</urlset>';
        exit;
    }

    public function robots() {
        // Establecer header para text/plain
        header("Content-Type: text/plain; charset=utf-8");
        
        // Obtener rutas desde el Enrutador
        $enrutador = Enrutador::getInstance();
        $todasLasRutas = $enrutador->listarRutas();
        
        // Filtrar solo rutas que NO son del Controlador_Web (para bloquear)
        $rutasNoWeb = [];
        foreach ($todasLasRutas as $ruta => $config) {
            if ($config[0] !== 'Controlador_Web') {
                $rutasNoWeb[] = $ruta;
            }
        }
        
        // Rutas específicas a bloquear (aunque sean del Controlador_Web)
        $rutasEspecificasBloqueadas = ['gracias', 'login', 'logout', 'recuperar-cuenta'];
        
        // Configuración para robots.txt
        $datos = [
            'rutasNoWeb' => $rutasNoWeb,
            'rutasEspecificasBloqueadas' => $rutasEspecificasBloqueadas,
            'sitemap' => ruta('sitemap.xml')
        ];
        
        // Extraer variables para la vista
        extract($datos);
        
        // Incluir vista directamente sin el wrapper de mostrar() para evitar HTML adicional
        include 'vistas/robots.php';
    }

}
?>
