<?php
class Controlador_Equipo extends Controlador_Admin_Base {
    
    private $rutaEquipo = 'c:\\xampp2\\htdocs\\unmaut\\recursos\\imagenes\\equipo';
    
    public function verEquipo() {
        $this->cambiarSeleccion('equipo');
        
        // Obtener todas las imágenes de la carpeta equipo
        $imagenes = [];
        if (is_dir($this->rutaEquipo)) {
            $archivos = scandir($this->rutaEquipo);
            foreach ($archivos as $archivo) {
                if ($archivo !== '.' && $archivo !== '..' && preg_match('/\.(webp|png|jpg|jpeg)$/i', $archivo)) {
                    $rutaCompleta = $this->rutaEquipo . '\\' . $archivo;
                    $imagenes[] = [
                        'nombre' => $archivo,
                        'ruta' => importAsset('imagenes/equipo/' . $archivo),
                        'fecha' => date('Y-m-d H:i:s', filemtime($rutaCompleta)),
                        'tamanio' => $this->formatBytes(filesize($rutaCompleta))
                    ];
                }
            }
            // Ordenar por fecha más reciente primero
            usort($imagenes, function($a, $b) {
                return strcmp($b['fecha'], $a['fecha']);
            });
        }
        
        $this->mostrar('admin/equipo/ver-equipo', [
            'usuario' => $_SESSION['usuario'],
            'imagenes' => $imagenes,
            'mensaje' => isset($_SESSION['mensaje']) ? $_SESSION['mensaje'] : null
        ]);
        
        // Limpiar mensaje después de mostrarlo
        if (isset($_SESSION['mensaje'])) {
            unset($_SESSION['mensaje']);
        }
    }
    
    public function subirImagen() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!isset($_FILES['imagen']) || $_FILES['imagen']['error'] !== UPLOAD_ERR_OK) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'Error al subir la imagen. Por favor, intente nuevamente.'
                ];
                header('Location: ' . ruta('admin/equipo'));
                exit;
            }
            
            $archivo = $_FILES['imagen'];
            $extension = strtolower(pathinfo($archivo['name'], PATHINFO_EXTENSION));
            $extensionesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];
            
            if (!in_array($extension, $extensionesPermitidas)) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'Solo se permiten imágenes JPG, PNG o WEBP.'
                ];
                header('Location: ' . ruta('admin/equipo'));
                exit;
            }
            
            // Validar tamaño (máximo 5MB)
            if ($archivo['size'] > 5 * 1024 * 1024) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'La imagen no debe superar los 5MB.'
                ];
                header('Location: ' . ruta('admin/equipo'));
                exit;
            }
            
            // Generar nombre único para evitar sobrescribir
            $nombreBase = pathinfo($archivo['name'], PATHINFO_FILENAME);
            $nombreBase = preg_replace('/[^a-zA-Z0-9-_]/', '-', $nombreBase);
            $nombreArchivo = $nombreBase . '.' . $extension;
            $contador = 1;
            
            while (file_exists($this->rutaEquipo . '\\' . $nombreArchivo)) {
                $nombreArchivo = $nombreBase . '-' . $contador . '.' . $extension;
                $contador++;
            }
            
            $rutaDestino = $this->rutaEquipo . '\\' . $nombreArchivo;
            
            if (move_uploaded_file($archivo['tmp_name'], $rutaDestino)) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'exito',
                    'texto' => 'Imagen subida correctamente: ' . $nombreArchivo
                ];
            } else {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'Error al guardar la imagen.'
                ];
            }
        }
        
        header('Location: ' . ruta('admin/equipo'));
        exit;
    }
    
    public function eliminarImagen() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombreImagen = isset($_POST['nombre']) ? $_POST['nombre'] : null;
            
            if (!$nombreImagen) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'No se especificó la imagen a eliminar.'
                ];
                header('Location: ' . ruta('admin/equipo'));
                exit;
            }
            
            // Validar que el nombre no contenga rutas maliciosas
            if (strpos($nombreImagen, '..') !== false || strpos($nombreImagen, '/') !== false || strpos($nombreImagen, '\\') !== false) {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'Nombre de archivo no válido.'
                ];
                header('Location: ' . ruta('admin/equipo'));
                exit;
            }
            
            $rutaImagen = $this->rutaEquipo . '\\' . $nombreImagen;
            
            if (file_exists($rutaImagen)) {
                if (unlink($rutaImagen)) {
                    $_SESSION['mensaje'] = [
                        'tipo' => 'exito',
                        'texto' => 'Imagen eliminada correctamente: ' . $nombreImagen
                    ];
                } else {
                    $_SESSION['mensaje'] = [
                        'tipo' => 'error',
                        'texto' => 'Error al eliminar la imagen.'
                    ];
                }
            } else {
                $_SESSION['mensaje'] = [
                    'tipo' => 'error',
                    'texto' => 'La imagen no existe.'
                ];
            }
        }
        
        header('Location: ' . ruta('admin/equipo'));
        exit;
    }
    
    private function formatBytes($bytes, $precision = 2) {
        $units = ['B', 'KB', 'MB', 'GB'];
        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);
        $bytes /= pow(1024, $pow);
        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}
?>
