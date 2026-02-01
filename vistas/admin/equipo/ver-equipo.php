<!DOCTYPE html>
<html lang="es" class="<?= configuracion('modo_dashboard') === 'oscuro' ? 'dark' : '' ?>">
<head>
  <?= $this->plantilla_admin('metas-basicas'); ?>
  <title>Equipo - Panel de Administración</title>
</head>
<body class="bg-white dark:bg-gray-800 lg:h-screen w-screen font-inter relative lg:pl-[180px] pt-[100px]">

    <?= $this->componente_admin('header');?>
    <?= $this->componente_admin('barra-lateral');?>
  
    <main class="flex w-full h-full max-w-full max-h-full overflow-clip p-4 lg:p-12">
      
        <!-- Sección de contenido -->
        <section class="w-full flex flex-col overflow-y-auto pr-4 overflow-x-hidden">

            <div class="w-full h-full relative">
                
                <div class="w-full flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-8">
                    <div class="flex flex-row gap-x-8 items-center">
                        <svg class="size-[50px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#50388E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-white"></path>
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="#50388E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="dark:stroke-white"></path>
                            </g>
                        </svg>
                        <h1 class="text-lg lg:text-2xl font-bold text-teven-primario dark:text-white">
                            Imágenes del Equipo
                        </h1>
                    </div>
                </div>

                <?php if ($mensaje): ?>
                <div class="mb-6 p-4 rounded-lg <?= $mensaje['tipo'] === 'exito' ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200' ?>">
                    <?= htmlspecialchars($mensaje['texto']) ?>
                </div>
                <?php endif; ?>

                <!-- Formulario para subir imagen -->
                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-6 mb-8">
                    <h2 class="text-xl font-semibold text-teven-primario dark:text-white mb-4">Subir Nueva Imagen del Equipo</h2>
                    <form action="<?= ruta('admin/equipo-subir') ?>" method="POST" enctype="multipart/form-data" class="flex flex-col lg:flex-row gap-4 items-end">
                        <div class="flex-1">
                            <label for="imagen" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                Seleccionar imagen (JPG, PNG, WEBP - Máx. 5MB)
                            </label>
                            <input 
                                type="file" 
                                name="imagen" 
                                id="imagen" 
                                accept=".jpg,.jpeg,.png,.webp"
                                required
                                class="w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-teven-secundario-2 focus:border-transparent dark:bg-gray-800 dark:text-white"
                            >
                        </div>
                        <button 
                            type="submit"
                            class="px-8 py-2 bg-teven-secundario-2 text-white font-semibold rounded-lg hover:bg-teven-complementario transition-colors duration-200 whitespace-nowrap"
                        >
                            Subir Imagen
                        </button>
                    </form>
                </div>

                <!-- Grid de imágenes -->
                <div class="mb-4">
                    <h2 class="text-xl font-semibold text-teven-primario dark:text-white mb-4">
                        Imágenes del equipo (<?= count($imagenes) ?>)
                    </h2>
                </div>

                <?php if (empty($imagenes)): ?>
                <div class="text-center py-12 bg-gray-50 dark:bg-gray-900 rounded-lg">
                    <svg class="mx-auto size-16 text-gray-400 dark:text-gray-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <p class="text-gray-500 dark:text-gray-400 text-lg">No hay imágenes del equipo</p>
                    <p class="text-gray-400 dark:text-gray-500 text-sm mt-2">Sube tu primera imagen usando el formulario de arriba</p>
                </div>
                <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php foreach ($imagenes as $imagen): ?>
                    <div class="bg-white dark:bg-gray-900 rounded-lg shadow-lg overflow-hidden group relative">
                        <!-- Imagen -->
                        <div class="aspect-square overflow-hidden bg-gray-200 dark:bg-gray-800">
                            <img 
                                src="<?= $imagen['ruta'] ?>" 
                                alt="<?= htmlspecialchars($imagen['nombre']) ?>"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                loading="lazy"
                            >
                        </div>
                        
                        <!-- Información -->
                        <div class="p-4">
                            <p class="text-sm font-semibold text-gray-800 dark:text-white truncate mb-2" title="<?= htmlspecialchars($imagen['nombre']) ?>">
                                <?= htmlspecialchars($imagen['nombre']) ?>
                            </p>
                            <div class="flex justify-between items-center text-xs text-gray-500 dark:text-gray-400">
                                <span><?= $imagen['tamanio'] ?></span>
                                <span><?= date('d/m/Y', strtotime($imagen['fecha'])) ?></span>
                            </div>
                            
                            <!-- Botón eliminar -->
                            <form action="<?= ruta('admin/equipo-eliminar') ?>" method="POST" class="mt-3" onsubmit="return confirm('¿Estás seguro de eliminar esta imagen? Esta acción no se puede deshacer.');">
                                <input type="hidden" name="nombre" value="<?= htmlspecialchars($imagen['nombre']) ?>">
                                <button 
                                    type="submit"
                                    class="w-full px-4 py-2 bg-red-500 hover:bg-red-600 text-white font-semibold rounded-lg transition-colors duration-200 flex items-center justify-center gap-2"
                                >
                                    <svg class="size-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>

        </section>

    </main>

</body>
</html>
