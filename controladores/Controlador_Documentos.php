<?php
class Controlador_Documentos extends Controlador {

    public function sitemap() {
        // Establecer header para XML antes de mostrar la vista
        header("Content-Type: application/xml; charset=utf-8");
        
        // Filtrar solo las rutas que pertenecen al Controlador_Web
        global $RUTAS;
        $rutasWebFiltradas = [];
        
        // Definir rutas a excluir del sitemap (técnicas, duplicadas o legales)
        $rutasExcluidas = ['sitemap.xml', 'robots.txt', 'home', 'aviso-de-privacidad'];
        
        foreach ($RUTAS as $ruta => $config) {
            if ($config[0] === 'Controlador_Web' && !in_array($ruta, $rutasExcluidas)) {
                $rutasWebFiltradas[] = $ruta;
            }
        }
        
        // Definir valores por defecto para todas las páginas
        $valoresDefecto = [
            'priority' => '0.8',
            'changefreq' => 'monthly'
        ];
        
        // Definir configuración personalizada solo para páginas específicas
        $configuracionPersonalizada = [
            '' => [
                'priority' => '1.0',
                'changefreq' => 'daily'
            ],
            //'pagina2' => [
            //    'priority' => '0.8',
            //    'changefreq' => 'weekly'
            //]
        ];
        
        // Función para obtener la fecha de última modificación del archivo de vista
        $obtenerLastMod = function($ruta) {
            // Determinar el archivo de vista basándose en la ruta
            if ($ruta === '') {
                // Ruta vacía corresponde al método index
                $archivoVista = 'vistas/web/index.php';
            } else {
                // Otras rutas corresponden directamente al nombre del método
                $archivoVista = "vistas/web/{$ruta}.php";
            }
            
            if (file_exists($archivoVista)) {
                return date('Y-m-d', filemtime($archivoVista));
            }
            
            // Fallback: usar la fecha de modificación del index
            $archivoIndex = 'vistas/web/index.php';
            if (file_exists($archivoIndex)) {
                return date('Y-m-d', filemtime($archivoIndex));
            }
            
            // Fallback final: fecha actual si ni siquiera existe el index
            return date('Y-m-d');
        };
        
        // Combinar valores por defecto con personalizados y agregar lastmod
        $configuracionSEO = [];
        foreach ($rutasWebFiltradas as $ruta) {
            $config = array_merge(
                $valoresDefecto, 
                isset($configuracionPersonalizada[$ruta]) ? $configuracionPersonalizada[$ruta] : []
            );
            
            // Agregar lastmod basado en la fecha del archivo de vista
            $config['lastmod'] = $obtenerLastMod($ruta);
            
            $configuracionSEO[$ruta] = $config;
        }
        
        // Pasar las rutas filtradas y configuración a la vista
        $datos['rutasWeb'] = $rutasWebFiltradas;
        $datos['configuracionSEO'] = $configuracionSEO;
        
        $this->mostrar('sitemap', $datos);
    }

    public function robots() {
        // Establecer header para text/plain
        header("Content-Type: text/plain; charset=utf-8");
        
        // Obtener rutas dinámicamente como en el sitemap
        global $RUTAS;
        
        // Filtrar solo rutas que NO son del Controlador_Web (para bloquear)
        $rutasNoWeb = [];
        foreach ($RUTAS as $ruta => $config) {
            if ($config[0] !== 'Controlador_Web') {
                $rutasNoWeb[] = $ruta;
            }
        }
        
        // Rutas específicas a bloquear (aunque sean del Controlador_Web)
        $rutasEspecificasBloqueadas = ['gracias', 'login', 'logout', 'recuperar-cuenta'];
        
        // Configuración para robots.txt
        $datosRobots = [
            'rutasNoWeb' => $rutasNoWeb,
            'rutasEspecificasBloqueadas' => $rutasEspecificasBloqueadas,
            'sitemap' => ruta('sitemap.xml')
        ];
        
        $this->mostrar('robots', $datosRobots);
    }

}
?>
