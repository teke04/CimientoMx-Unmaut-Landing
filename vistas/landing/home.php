<!DOCTYPE html>
<html lang="ES">
<head> 
    <?php $this->plantilla('metas-basicas')?>
    <?php $this->plantilla('estilos')?>
    <?= configuracion('tag_manager_head') ?>
    <title><?= isset($meta_titulo) ? $meta_titulo : env('EMPRESA') ?></title>
    <meta name="description" content="<?= isset($meta_descripcion) ? htmlspecialchars($meta_descripcion) : '' ?>">
    <meta name="robots" content="noindex, follow">

    
</head>
<body class="w-screen overflow-x-clip font-roboto">
    <main class="w-full max-w-screen overflow-hidden">
        <?= configuracion('tag_manager_body') ?>
        
        <?php $this->componente('navbar');?>
        <?php $this->componente('flotante-whatsapp');?>


        <!-- PRIMERA SECCION HERO -->
        <section id="seccion1" class="w-screen h-screen min-h-[850px] md:min-h-[1020px] xl:min-h-0 flex items-center justify-center relative text-white px-[28px] md:px-[80px]">
 
            <img src="<?=importAsset('imagenes/fondo-desktop.webp')?>" alt="Imagen de fondo" class="absolute top-0 left-0 w-full h-full object-cover object-center z-0"/>

            <div class="w-full max-w-[1380px] flex items-center justify-left z-30 relative pt-[100px]">
                <div class="flex flex-col w-full max-w-[1020px] gap-y-[20px]">
                    <h1 class="text-[38px] md:text-[70px] font-semibold md:font-bold"><?= isset($h1) ? $h1 : 'Integración y Automatización Industrial de Alta Fiabilidad' ?></h1>
                    <h2 class="text-[28px] md:text-[36px]"><?= isset($h2) ? $h2 : 'En INMAUT desarrollamos soluciones de automatización, eléctricas y mecánicas a la medida, cumpliendo los criterios y normas de calidad de la industria, con enfoque en mejora continua.' ?></h2>
                    <button onclick="openModal()" class="text-[#504696] bg-white rounded-full py-[16px] px-[32px] w-fit font-medium text-[20px] duration-200 hover:bg-[#8F85D2] hover:text-white">
                        Más información
                    </button>
                </div>
            </div>
            
        </section>

        <section id="seccion2" class="w-screen flex flex-col items-center justify-center relative bg-[#EBEBEB] py-[80px] md:py-[120px] overflow-hidden">
            <h2 class="text-[28px] px-[28px] md:text-[36px] text-[#504696] text-center">La industria nos elige porque nuestra calidad es <strong>demostrable</strong></h2>
            <div class="w-full mt-[40px] md:mt-[80px] overflow-hidden">
                <div class="flex animate-scroll-mobile md:animate-scroll gap-[20px] will-change-transform">
                    <?php 
                        $logos = array();
                        $ruta_logos = dirname(__DIR__, 2) . '/recursos/imagenes/logos-clientes';
                        if (is_dir($ruta_logos)) {
                            $archivos = scandir($ruta_logos);
                            foreach ($archivos as $archivo) {
                                if ($archivo !== '.' && $archivo !== '..' && preg_match('/\.(webp|png|jpg|jpeg)$/i', $archivo)) {
                                    $logos[] = $archivo;
                                }
                            }
                        }
                        sort($logos);
                        
                        // Mostrar logos dos veces para efecto infinito
                        for ($i = 0; $i < 2; $i++) {
                            foreach ($logos as $logo) {
                                $urlLogo = rtrim(env('DOMINIO'), '/') . '/recursos/imagenes/logos-clientes/' . $logo;
                                echo '<div class=" size-[120px] p-[20px] flex-shrink-0 bg-white rounded-[20px]">';
                                echo '  <img src="' . $urlLogo . '" alt="Logo cliente" class="w-full h-full object-contain"/>';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </section>


        <section id="seccion1" class="w-screen flex items-center justify-center relative px-[28px] py-[80px] md:py-[120px]">
            <div class="w-full max-w-[1140px] flex flex-col-reverse lg:flex-row justify-between items-center gap-x-[30px] gap-y-[60px]">
                <img src="<?=importAsset('imagenes/maquinaria.webp')?>" alt="maquinaria" class="w-full max-w-[440px] h-auto object-cover object-center"/>
                <div class="flex flex-col w-full max-w-[560px]">
                    <h2 class="text-[28px] md:text-[36px] text-[#282D7D]"><span class="text-[50px] md:text-[70px] font-bold bg-gradient-morados bg-clip-text text-transparent">+15 años</span><br class="mt-[10px]">de experencia nos respaldan</h2>
                    <ul class="flex flex-col py-[60px] gap-y-[30px]">
                        <li class="flex flex-row gap-x-[30px] items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <g clip-path="url(#clip0_4127_1967)">
                                    <path d="M28.7501 27.5H27.5001V14.375C27.5001 12.8413 26.7026 11.4937 25.5038 10.7125L19.4701 1.86C18.8176 0.7525 17.6251 0 16.2501 0C14.1826 0 12.5001 1.6825 12.5001 3.75C12.5001 4.20625 12.5938 4.63875 12.7438 5.045L8.29757 8.75H5.82132C4.15257 8.75 2.58257 9.4 1.40257 10.58L0.366318 11.6163C-0.122432 12.105 -0.122432 12.895 0.366318 13.3837C0.855068 13.8725 1.64507 13.8725 2.13382 13.3837L3.17007 12.3475C3.86882 11.65 4.83507 11.25 5.82132 11.25H7.50007V12.9288C7.50007 13.9163 7.10007 14.8812 6.40257 15.58L5.36632 16.6163C4.87757 17.105 4.87757 17.895 5.36632 18.3837C5.61007 18.6275 5.93007 18.75 6.25007 18.75C6.57007 18.75 6.89007 18.6275 7.13382 18.3837L8.17007 17.3475C9.35007 16.1675 10.0001 14.5975 10.0001 12.9288V10.585L14.0826 7.1825L18.7801 14.075C18.7726 14.1763 18.7501 14.2712 18.7501 14.3737V27.4988H17.5001C16.8101 27.4988 16.2501 28.0588 16.2501 28.7488C16.2501 29.4388 16.8101 29.9988 17.5001 29.9988H28.7501C29.4401 29.9988 30.0001 29.4388 30.0001 28.7488C30.0001 28.0588 29.4401 27.5 28.7501 27.5ZM16.2501 5C15.5601 5 15.0001 4.44 15.0001 3.75C15.0001 3.06 15.5601 2.5 16.2501 2.5C16.9401 2.5 17.5001 3.06 17.5001 3.75C17.5001 4.44 16.9401 5 16.2501 5ZM17.2238 7.355C18.0463 7.1325 18.7551 6.64125 19.2501 5.975L22.0863 10.1375C21.2601 10.34 20.5276 10.7725 19.9601 11.37L17.2238 7.355ZM25.0001 27.5H21.2501V18.3113C21.8201 18.585 22.4513 18.75 23.1251 18.75C23.7988 18.75 24.4301 18.5837 25.0001 18.3113V27.5ZM23.1251 16.25C22.0913 16.25 21.2501 15.4087 21.2501 14.375C21.2501 13.3413 22.0913 12.5 23.1251 12.5C24.1588 12.5 25.0001 13.3413 25.0001 14.375C25.0001 15.4087 24.1588 16.25 23.1251 16.25Z" fill="#504696"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4127_1967">
                                    <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>

                            <p class="text-[22px] md:text-[26px] text-[#1E1E1E]">Maquinaria especializada.</p>
                        </li>
                        <li class="flex flex-row gap-x-[30px] items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M6.25003 10H7.50003V11.25C7.42003 15.285 10.9838 18.835 15.0163 18.7487C19.11 18.7812 22.51 15.2125 22.5 10.9812V10H23.75C24.4413 10 25 9.44125 25 8.75C25 8.05875 24.4413 7.5 23.75 7.5H22.5C22.5 3.36375 19.1363 0 15 0C10.8638 0 7.50003 3.36375 7.50003 7.5H6.25003C5.56003 7.5 5.00003 8.05875 5.00003 8.75C5.00003 9.44125 5.56003 10 6.25003 10ZM15.495 16.2262C14.0613 16.36 12.6913 15.91 11.6375 14.95C10.5963 14.0025 10 12.655 10 11.2487V9.99875H20V10.98C20 13.68 18.0213 15.9837 15.495 16.225V16.2262ZM13.75 2.6775V5C13.75 5.69125 14.31 6.25 15 6.25C15.69 6.25 16.25 5.69125 16.25 5V2.6775C18.4013 3.23625 20 5.17625 20 7.5H10C10 5.17625 11.6 3.23625 13.75 2.6775ZM28.75 23.75V28.75C28.75 29.4412 28.1913 30 27.5 30C26.8088 30 26.25 29.4412 26.25 28.75V23.75C26.2888 22.235 24.78 20.9837 23.3025 21.29L18.0225 22.25C16.9963 22.4375 16.25 23.3312 16.25 24.375V28.75C16.25 29.4412 15.69 30 15 30C14.31 30 13.75 29.4412 13.75 28.75V24.375C13.75 23.3312 13.0038 22.4375 11.9775 22.25L6.69753 21.29C5.21253 20.985 3.71378 22.235 3.75003 23.75V28.75C3.75003 29.4412 3.19003 30 2.50003 30C1.81003 30 1.25003 29.4412 1.25003 28.75V23.75C1.17503 20.7225 4.18128 18.215 7.14503 18.8312L12.425 19.7913C13.45 19.9775 14.335 20.5 15 21.22C15.6663 20.5 16.55 19.9775 17.575 19.7913L22.8563 18.8312C25.8175 18.2113 28.8263 20.7237 28.75 23.75Z" fill="#504696"/>
                            </svg>

                            <p class="text-[22px] md:text-[26px] text-[#1E1E1E]">Equipo de ingenieros altamente capacitados.</p>
                        </li>
                        <li class="flex flex-row gap-x-[30px] items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <g clip-path="url(#clip0_4127_1979)">
                                    <path d="M25.0002 10.0001C25.0038 8.3812 24.6142 6.78561 23.865 5.35048C23.1158 3.91534 22.0293 2.68355 20.699 1.76096C19.3687 0.838374 17.8342 0.252566 16.2276 0.0538734C14.6209 -0.144819 12.9899 0.0495456 11.4749 0.620267C9.95995 1.19099 8.60617 2.121 7.52992 3.33039C6.45368 4.53979 5.68715 5.9924 5.2962 7.56342C4.90525 9.13444 4.90157 10.7769 5.28548 12.3496C5.66939 13.9224 6.4294 15.3784 7.50022 16.5926V26.8751C7.50021 27.4638 7.66648 28.0405 7.97989 28.5389C8.29329 29.0372 8.74107 29.4368 9.27167 29.6918C9.80227 29.9468 10.3941 30.0467 10.979 29.9801C11.5639 29.9134 12.1181 29.6829 12.5777 29.3151L14.6102 27.6901C14.721 27.6017 14.8585 27.5535 15.0002 27.5535C15.1419 27.5535 15.2795 27.6017 15.3902 27.6901L17.4227 29.3151C17.8824 29.6829 18.4365 29.9134 19.0214 29.9801C19.6063 30.0467 20.1982 29.9468 20.7288 29.6918C21.2594 29.4368 21.7072 29.0372 22.0206 28.5389C22.334 28.0405 22.5002 27.4638 22.5002 26.8751V16.5926C24.1106 14.7741 24.9998 12.4292 25.0002 10.0001ZM15.0002 2.50012C16.4836 2.50012 17.9336 2.93999 19.167 3.7641C20.4004 4.58821 21.3617 5.75955 21.9293 7.13C22.497 8.50045 22.6455 10.0084 22.3561 11.4633C22.0667 12.9182 21.3524 14.2545 20.3035 15.3034C19.2546 16.3523 17.9183 17.0666 16.4634 17.356C15.0085 17.6454 13.5005 17.4969 12.1301 16.9292C10.7596 16.3616 9.58831 15.4003 8.7642 14.1669C7.94009 12.9335 7.50022 11.4835 7.50022 10.0001C7.50221 8.01161 8.29302 6.10511 9.69911 4.69902C11.1052 3.29292 13.0117 2.50211 15.0002 2.50012ZM19.6465 27.4351C19.5407 27.4875 19.4221 27.5083 19.3048 27.495C19.1875 27.4817 19.0766 27.4349 18.9852 27.3601L16.9527 25.7351C16.3995 25.2895 15.7106 25.0465 15.0002 25.0465C14.2899 25.0465 13.6009 25.2895 13.0477 25.7351L11.0165 27.3601C10.9248 27.4338 10.8141 27.48 10.6973 27.4936C10.5805 27.5071 10.4622 27.4875 10.356 27.4368C10.2499 27.3861 10.1602 27.3066 10.0972 27.2072C10.0343 27.1078 10.0007 26.9927 10.0002 26.8751V18.6476C11.5177 19.5333 13.2432 20.0001 15.0002 20.0001C16.7573 20.0001 18.4828 19.5333 20.0002 18.6476V26.8751C20.0016 26.9927 19.969 27.1081 19.9062 27.2074C19.8434 27.3068 19.7532 27.3859 19.6465 27.4351Z" fill="#504696"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4127_1979">
                                    <rect width="30" height="30" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>

                            <p class="text-[22px] md:text-[26px] text-[#1E1E1E]">Experiencia real en proyectos industriales complejos.</p>
                        </li>
                    </ul>
                    <button onclick="openModal()" class="bg-[#504696] text-[20px] font-medium text-[#FFF] px-[32px] py-[16px] hover:bg-[#8F85D2] w-fit rounded-full">Agendar una consulta</button>
                </div>
            </div>
        </section>

        <section class="w-screen bg-[#EBEBEB] py-[80px] md:py-[120px] flex flex-col items-center justify-center gap-[40px]">
            <h2 class="text-[28px] md:text-[36px] text-[#282D7D] text-center px-[28px] w-full max-w-[1140px] ">Contamos con un equipo <strong>altamente capacitado</strong> para desarrollar soluciones hechas a la medida de tu empresa.</h2>
            
            <!-- Slider de imágenes -->
            <div class="w-full h-[425px] flex items-center">
                <div id="slider-equipo" class="flex gap-[20px] transition-transform duration-500 ease-in-out items-center pl-[80px] md:pl-[150px]">
                    <?php 
                        $imagenes_equipo = array();
                        $ruta_equipo = dirname(__DIR__, 2) . '/recursos/imagenes/equipo';
                        if (is_dir($ruta_equipo)) {
                            $archivos = scandir($ruta_equipo);
                            foreach ($archivos as $archivo) {
                                if ($archivo !== '.' && $archivo !== '..' && preg_match('/\.(webp|png|jpg|jpeg)$/i', $archivo)) {
                                    $imagenes_equipo[] = $archivo;
                                }
                            }
                        }
                        sort($imagenes_equipo);
                        
                        // Duplicar las imágenes para el efecto infinito (3 veces para mejor continuidad)
                        for ($repeticion = 0; $repeticion < 3; $repeticion++) {
                            foreach ($imagenes_equipo as $index => $imagen) {
                                $indexReal = $repeticion * count($imagenes_equipo) + $index;
                                $activo = $indexReal === count($imagenes_equipo) ? 'imagen-activa' : 'filtro-azul';
                                $tamanio = $indexReal === count($imagenes_equipo) ? 'w-[325px] h-[425px]' : 'w-[208px] h-[283px]';
                                $imagenUrl = importAsset('imagenes/equipo/' . $imagen);
                                
                                if ($activo === 'filtro-azul') {
                                    // Imagen con filtro azul
                                    $estilo = 'transition: all 0.5s ease-in-out; border-radius: 20px; background: linear-gradient(0deg, rgba(40, 45, 125, 0.37) 0%, rgba(40, 45, 125, 0.37) 100%), linear-gradient(0deg, #282D7D 0%, #282D7D 100%), linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), url(' . $imagenUrl . ') lightgray 50% / cover no-repeat; background-blend-mode: multiply, color, normal, normal;';
                                } else {
                                    // Imagen sin filtro
                                    $estilo = 'transition: all 0.5s ease-in-out; border-radius: 20px; background: url(' . $imagenUrl . ') lightgray 50% / cover no-repeat;';
                                }
                                
                                echo '<div class="imagen-slider ' . $tamanio . ' flex-shrink-0 ' . $activo . '" data-index="' . $indexReal . '" data-original-index="' . $index . '" style="' . $estilo . '">';
                                echo '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
            
            <!-- Botones de navegación -->
            <div class="flex gap-[20px]">
                <button id="btn-anterior" aria-label="Ver miembro anterior del equipo" class="w-[50px] h-[50px] rounded-full bg-[#8F85D2] hover:bg-[#504696] text-white flex items-center justify-center transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <button id="btn-siguiente" aria-label="Ver siguiente miembro del equipo" class="w-[50px] h-[50px] rounded-full bg-[#8F85D2] hover:bg-[#504696] text-white flex items-center justify-center transition-colors duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </section>

        <!-- SECCIÓN DE SERVICIOS -->
        <section class="w-screen min-h-screen flex items-center justify-center relative py-[80px] md:py-[120px] px-[28px]">
            <!-- Fondo para desktop -->
            <img src="<?=importAsset('imagenes/fondo-s4-desktop.webp')?>" alt="Fondo servicios" class="hidden md:block absolute top-0 left-0 w-full h-full object-cover object-center z-0"/>
            
            <!-- Fondo para mobile -->
            <img src="<?=importAsset('imagenes/fondo-s4-mobile.webp')?>" alt="Fondo servicios" class="block md:hidden absolute top-0 left-0 w-full h-full object-cover object-center z-0"/>
            
            <div class="w-full max-w-[1140px] relative z-10 flex flex-col items-center">
                <!-- Título -->
                <h2 class="text-[28px] md:text-[36px] text-white text-center mb-[60px] md:mb-[80px]">Ingeniería, Automatización y Control para la Industria</h2>

                <div class="my-[80px] flex flex-col gap-y-[80px]">
                    
                    <div style="border-radius: 20px; background: rgba(80, 70, 150, 0.30); backdrop-filter: blur(5px);"
                        class="group px-[60px] py-[80px] flex flex-col relative gap-y-[40px] hover:!bg-white focus:!bg-white transition-all duration-300 cursor-pointer" tabindex="0">
                        <div class="size-[100px] p-[20px] absolute top-[-50px] left-[60px] bg-[#504696] rounded-[20px] group-hover:bg-[#282D7D] group-focus:bg-[#282D7D] transition-colors duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="60" viewBox="0 0 62 60" fill="none" class="[&>g>path]:fill-white [&>g>path]:group-hover:fill-white [&>g>path]:group-focus:fill-white [&>g>path]:transition-colors [&>g>path]:duration-300">
                                <g clip-path="url(#clip0_4162_2130)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M31.1721 6.50117C33.0113 6.50117 34.5001 5.04833 34.5001 3.25364C34.5001 1.45895 33.0113 0.00610352 31.1721 0.00610352C29.3329 0.00610352 27.8441 1.45895 27.8441 3.25364C27.8441 5.04833 29.3329 6.50117 31.1721 6.50117ZM19.9244 35.3017C21.7635 35.3017 23.2524 33.8488 23.2524 32.0541C23.2524 30.2594 21.7635 28.8066 19.9244 28.8066C18.0852 28.8066 16.5963 30.2594 16.5963 32.0541C16.5963 33.8488 18.0852 35.3017 19.9244 35.3017ZM37.3527 42.1691C39.1919 42.1691 40.6808 40.7162 40.6808 38.9216C40.6808 37.1269 39.1919 35.674 37.3527 35.674C35.5136 35.674 34.0247 37.1269 34.0247 38.9216C34.0247 40.7162 35.5136 42.1691 37.3527 42.1691ZM22.6081 52.1498C24.4472 52.1498 25.9361 50.6969 25.9361 48.9022C25.9361 47.1075 24.4472 45.6547 22.6081 45.6547C20.7689 45.6547 19.28 47.1075 19.28 48.9022C19.28 50.6969 20.7689 52.1498 22.6081 52.1498ZM41.8819 24.9975C43.721 24.9975 45.2099 23.5446 45.2099 21.7499C45.2099 19.9552 43.721 18.5024 41.8819 18.5024C40.0427 18.5024 38.5538 19.9552 38.5538 21.7499C38.5538 23.5446 40.0427 24.9975 41.8819 24.9975ZM58.3093 33.3421C60.1485 33.3421 61.6373 31.8893 61.6373 30.0946C61.6373 28.2999 60.1485 26.8471 58.3093 26.8471C56.4701 26.8471 54.9813 28.2999 54.9813 30.0946C54.9813 31.8893 56.4701 33.3421 58.3093 33.3421ZM30.8218 60C32.661 60 34.1498 58.5472 34.1498 56.7525C34.1498 54.9578 32.661 53.5049 30.8218 53.5049C28.9826 53.5049 27.4938 54.9578 27.4938 56.7525C27.4938 58.5472 28.9826 60 30.8218 60ZM3.32803 33.5009C5.1672 33.5009 6.65606 32.048 6.65606 30.2533C6.65606 28.4586 5.1672 27.0058 3.32803 27.0058C1.48885 27.0058 0 28.4586 0 30.2533C0 32.048 1.48885 33.5009 3.32803 33.5009ZM18.9172 18.13C20.7564 18.13 22.2452 16.6772 22.2452 14.8825C22.2452 13.0878 20.7564 11.635 18.9172 11.635C17.078 11.635 15.5892 13.0878 15.5892 14.8825C15.5892 16.6772 17.078 18.13 18.9172 18.13Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.59888 26.5235L15.1763 17.2326C15.3452 17.4951 15.5454 17.7332 15.7706 17.953C16.0772 18.2521 16.4275 18.5085 16.8153 18.7099L7.16906 28.0679C6.97513 27.7444 6.74367 27.4514 6.47467 27.1889C6.21194 26.9325 5.91792 26.7127 5.59888 26.5235ZM21.3507 11.2442L27.3374 5.43896C27.5313 5.7625 27.7628 6.05551 28.0318 6.318C28.2945 6.57438 28.5885 6.79414 28.9076 6.98337L22.8583 12.8558C22.6519 12.4712 22.3829 12.1172 22.0701 11.8119C21.8512 11.5983 21.6134 11.4091 21.357 11.2442H21.3507ZM34.9881 5.47559L56.0761 26.3343C55.7445 26.5235 55.4317 26.7555 55.1627 27.018C54.5809 27.5857 54.1618 28.306 53.9741 29.1118L45.1849 24.6495C45.6854 24.1123 46.0419 23.4469 46.2171 22.7144L52.5416 25.9253L36.258 9.82191L40.7308 17.5501C39.9927 17.7454 39.3296 18.1178 38.7978 18.6183L32.3232 7.4351C33.0864 7.23365 33.7745 6.84297 34.3188 6.31189C34.5752 6.06161 34.8004 5.78081 34.9881 5.46949V5.47559ZM56.0385 33.8244L34.6566 54.561C34.4626 54.2374 34.2312 53.9444 33.9622 53.6819C33.2428 52.9799 32.2857 52.5221 31.2159 52.4305L34.8505 42.5109C35.4573 42.9138 36.1767 43.1763 36.9524 43.2434L33.5305 52.5831L53.3486 33.3665L41.7505 38.2561C41.6317 37.5114 41.3189 36.8277 40.8622 36.2539L53.9116 30.7539C54.0555 31.6878 54.5121 32.518 55.1627 33.159C55.4255 33.4154 55.7195 33.6351 56.0385 33.8244ZM26.9621 54.5854L24.8977 52.6137C25.2105 52.4305 25.492 52.2108 25.7485 51.9666C26.0237 51.698 26.2614 51.3928 26.4616 51.0631L28.5197 53.0349C28.2132 53.218 27.9254 53.4377 27.669 53.6819C27.3937 53.9505 27.156 54.2557 26.9558 54.5854H26.9621ZM18.7609 46.7168L5.59888 33.9892C5.91792 33.806 6.21193 33.5802 6.46842 33.3299C6.73741 33.0674 6.97513 32.7683 7.16906 32.4448L20.331 45.1724C20.012 45.3555 19.718 45.5814 19.4615 45.8317C19.1925 46.0942 18.9548 46.3933 18.7609 46.7168ZM23.3588 15.0717C23.3275 15.8347 23.0898 16.5428 22.7082 17.1533L37.4403 21.5606C37.4716 20.7976 37.7093 20.0895 38.0909 19.4791L23.3588 15.0717ZM34.4501 42.2118C34.3688 42.1446 34.2875 42.0714 34.2124 41.992C33.762 41.5525 33.4054 41.0214 33.1802 40.4232L25.5107 45.6119C25.5921 45.6791 25.6734 45.7523 25.7485 45.8317C26.1989 46.2712 26.5554 46.8023 26.7806 47.4005L34.4501 42.2118ZM7.73207 29.6367C7.76335 29.8382 7.77586 30.0457 7.77586 30.2533C7.77586 30.7966 7.67577 31.3216 7.4881 31.7977L15.5204 32.6706C15.4891 32.4692 15.4766 32.2616 15.4766 32.0541C15.4766 31.5108 15.5767 30.9858 15.7644 30.5097L7.73207 29.6367ZM18.5669 27.9214L18.054 19.1372C18.3355 19.1921 18.6232 19.2227 18.9235 19.2227C19.3989 19.2227 19.8556 19.1494 20.281 19.0151L20.794 27.7993C20.5124 27.7444 20.2247 27.7139 19.9244 27.7139C19.449 27.7139 18.9923 27.7871 18.5669 27.9214ZM20.844 44.916C21.382 44.6902 21.9763 44.562 22.6018 44.562C22.752 44.562 22.8959 44.5681 23.0397 44.5803L21.6823 36.0402C21.1443 36.2661 20.5437 36.3943 19.9182 36.3943C19.768 36.3943 19.6241 36.3882 19.4803 36.376L20.8377 44.916H20.844ZM32.9488 38.3599C33.0489 37.6091 33.3429 36.9193 33.787 36.3455L24.3409 32.6218C24.2408 33.3726 23.9468 34.0624 23.5027 34.6362L32.9488 38.3599ZM37.3528 34.5813C38.1347 34.5813 38.8666 34.7766 39.5047 35.1185L41.8881 26.084C41.1062 26.084 40.3743 25.8887 39.7362 25.5407L37.3528 34.5752V34.5813ZM38.485 24.5457C38.0096 23.9963 37.6656 23.3248 37.5217 22.5862L23.3275 29.2461C23.8029 29.7955 24.147 30.4669 24.2909 31.2056L38.485 24.5457Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4162_2130">
                                    <rect width="61.6373" height="60" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3 class="text-[22px] text-white font-bold group-hover:text-[#504696] group-focus:text-[#504696] transition-colors duration-300">SERVICIOS DE AUTOMATIZACIÓN</h3>
                        <div class="flex flex-col lg:flex-row gap-x-[20px] gap-y-[20px] text-[18px] text-white group-hover:text-[#504696] group-focus:text-[#504696] transition-colors duration-300">
                            <ul class="w-full flex flex-col gap-y-[20px] [&_svg>g>path]:fill-white [&_svg>g>path]:group-hover:fill-[#504696] [&_svg>g>path]:group-focus:fill-[#504696] [&_svg>g>path]:transition-colors [&_svg>g>path]:duration-300">
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Programación de PLC.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Programación de HMI.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Programación de Sistemas de Visión.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Programación de Sensores de Visión.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Programación de Equipos de Marcaje Láser.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Sensores de Medición, Presencia, Fuerza, Presión.</label>
                                </li>
                            </ul>
                            <ul class="w-full flex flex-col gap-y-[20px] [&_svg>g>path]:fill-white [&_svg>g>path]:group-hover:fill-[#504696] [&_svg>g>path]:group-focus:fill-[#504696] [&_svg>g>path]:transition-colors [&_svg>g>path]:duration-300">
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Servomotores.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Robots.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Equipos Especiales.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Conveyors..</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Cilindros Hidroneumáticos.</label>
                                </li>
                                <li class="flex flex-row gap-x-[10px] items-center">
                                    <svg class="min-h-[30px] min-w-[30px] [&_svg>g>path]:group-hover:fill-[#504696]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <g clip-path="url(#clip0_4162_522)">
                                            <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_4162_522">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <label>Integración de Atornilladores</label>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="flex flex-col lg:flex-row gap-[80px]">

                        <div class="group px-[60px] py-[80px] flex flex-col relative w-full gap-y-[40px] rounded-[20px] bg-[rgba(80,70,150,0.30)] backdrop-blur-[5px] hover:!bg-white focus:!bg-white transition-all duration-300 cursor-pointer" tabindex="0">
                            <div class="size-[100px] p-[20px] absolute top-[-50px] left-[60px] bg-[#504696] group-hover:bg-[#282D7D] group-focus:bg-[#282D7D] rounded-[20px] transition-colors duration-300">
                                <svg class="[&>g>path]:fill-white [&>g>path]:group-hover:fill-white [&>g>path]:group-focus:fill-white [&>g>path]:transition-colors [&>g>path]:duration-300" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                    <g clip-path="url(#clip0_4162_2134)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.9872 50.0841H50.0188V10.0584H9.9872V50.09V50.0841ZM50.9559 51.97H8.09534V8.1665H51.8988V51.97H50.9559Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.6221 41.4488H41.372V18.6931H18.6221V41.4429V41.4488ZM42.3209 43.3348H16.7362V16.8071H43.2638V43.3348H42.3209Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5513 33.5141H33.4427V26.6228H26.5513V33.5141ZM34.3916 35.406H24.6654V24.7368H35.3346V35.406H34.3916Z" fill="white"/>
                                        <path d="M58.2742 29.125H1.71985V31.0109H58.2742V29.125Z" fill="white"/>
                                        <path d="M30.94 1.79102H29.0541V58.3453H30.94V1.79102Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0205 11.0902C10.0702 11.0902 10.9302 10.2362 10.9302 9.18644C10.9302 8.13672 10.0761 7.28271 9.0205 7.28271C7.96485 7.28271 7.11084 8.13672 7.11084 9.18644C7.11084 10.2362 7.96485 11.0902 9.0205 11.0902Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.2799 11.0902C25.3296 11.0902 26.1896 10.2362 26.1896 9.18644C26.1896 8.13672 25.3355 7.28271 24.2799 7.28271C23.2242 7.28271 22.3702 8.13672 22.3702 9.18644C22.3702 10.2362 23.2242 11.0902 24.2799 11.0902Z" fill="white"/>
                                        <path d="M39.5334 11.0843C40.5881 11.0843 41.4431 10.232 41.4431 9.18058C41.4431 8.12918 40.5881 7.27686 39.5334 7.27686C38.4788 7.27686 37.6238 8.12918 37.6238 9.18058C37.6238 10.232 38.4788 11.0843 39.5334 11.0843Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.9795 14.8978C52.0292 14.8978 52.8891 14.0438 52.8891 12.9941C52.8891 11.9443 52.0351 11.0903 50.9795 11.0903C49.9238 11.0903 49.0698 11.9443 49.0698 12.9941C49.0698 14.0438 49.9238 14.8978 50.9795 14.8978Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0205 26.326C10.0702 26.326 10.9302 25.472 10.9302 24.4223C10.9302 23.3726 10.0761 22.5186 9.0205 22.5186C7.96485 22.5186 7.11084 23.3726 7.11084 24.4223C7.11084 25.472 7.96485 26.326 9.0205 26.326Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.9795 30.1336C52.0292 30.1336 52.8891 29.2796 52.8891 28.2299C52.8891 27.1802 52.0351 26.3262 50.9795 26.3262C49.9238 26.3262 49.0698 27.1802 49.0698 28.2299C49.0698 29.2796 49.9238 30.1336 50.9795 30.1336Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.0205 41.556C10.0702 41.556 10.9302 40.702 10.9302 39.6523C10.9302 38.6025 10.0761 37.7485 9.0205 37.7485C7.96485 37.7485 7.11084 38.6025 7.11084 39.6523C7.11084 40.702 7.96485 41.556 9.0205 41.556Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M50.9795 45.369C52.0292 45.369 52.8891 44.515 52.8891 43.4652C52.8891 42.4155 52.0351 41.5615 50.9795 41.5615C49.9238 41.5615 49.0698 42.4155 49.0698 43.4652C49.0698 44.515 49.9238 45.369 50.9795 45.369Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8339 52.9842C13.8836 52.9842 14.7435 52.1302 14.7435 51.0805C14.7435 50.0308 13.8895 49.1768 12.8339 49.1768C11.7782 49.1768 10.9242 50.0308 10.9242 51.0805C10.9242 52.1302 11.7782 52.9842 12.8339 52.9842Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0932 52.9842C29.143 52.9842 30.0029 52.1302 30.0029 51.0805C30.0029 50.0308 29.1489 49.1768 28.0932 49.1768C27.0376 49.1768 26.1836 50.0308 26.1836 51.0805C26.1836 52.1302 27.0376 52.9842 28.0932 52.9842Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.3528 52.9842C44.4025 52.9842 45.2624 52.1302 45.2624 51.0805C45.2624 50.0308 44.4084 49.1768 43.3528 49.1768C42.2971 49.1768 41.4431 50.0308 41.4431 51.0805C41.4431 52.1302 42.2971 52.9842 43.3528 52.9842Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6052 19.4823C22.6549 19.4823 23.5149 18.6282 23.5149 17.5785C23.5149 16.5288 22.6609 15.6748 21.6052 15.6748C20.5496 15.6748 19.6956 16.5288 19.6956 17.5785C19.6956 18.6282 20.5496 19.4823 21.6052 19.4823Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M36.8647 19.4823C37.9145 19.4823 38.7744 18.6282 38.7744 17.5785C38.7744 16.5288 37.9204 15.6748 36.8647 15.6748C35.8091 15.6748 34.9551 16.5288 34.9551 17.5785C34.9551 18.6282 35.8091 19.4823 36.8647 19.4823Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6554 25.6141C18.7051 25.6141 19.565 24.7601 19.565 23.7104C19.565 22.6606 18.711 21.8066 17.6554 21.8066C16.5997 21.8066 15.7457 22.6606 15.7457 23.7104C15.7457 24.7601 16.5997 25.6141 17.6554 25.6141Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.6554 40.8499C18.7051 40.8499 19.565 39.9959 19.565 38.9462C19.565 37.8965 18.711 37.0425 17.6554 37.0425C16.5997 37.0425 15.7457 37.8965 15.7457 38.9462C15.7457 39.9959 16.5997 40.8499 17.6554 40.8499Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.3208 23.3846C43.3705 23.3846 44.2304 22.5306 44.2304 21.4809C44.2304 20.4312 43.3764 19.5771 42.3208 19.5771C41.2651 19.5771 40.4111 20.4312 40.4111 21.4809C40.4111 22.5306 41.2651 23.3846 42.3208 23.3846Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M42.3208 38.6141C43.3705 38.6141 44.2304 37.7601 44.2304 36.7104C44.2304 35.6607 43.3764 34.8066 42.3208 34.8066C41.2651 34.8066 40.4111 35.6607 40.4111 36.7104C40.4111 37.7601 41.2651 38.6141 42.3208 38.6141Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.5052 44.118C25.555 44.118 26.4149 43.264 26.4149 42.2143C26.4149 41.1646 25.5609 40.3105 24.5052 40.3105C23.4496 40.3105 22.5956 41.1646 22.5956 42.2143C22.5956 43.264 23.4496 44.118 24.5052 44.118Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M39.7648 44.118C40.8145 44.118 41.6744 43.264 41.6744 42.2143C41.6744 41.1646 40.8204 40.3105 39.7648 40.3105C38.7091 40.3105 37.8551 41.1646 37.8551 42.2143C37.8551 43.264 38.7091 44.118 39.7648 44.118Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2237 27.6248C29.2735 27.6248 30.1334 26.7708 30.1334 25.7211C30.1334 24.6714 29.2794 23.8174 28.2237 23.8174C27.1681 23.8174 26.3141 24.6714 26.3141 25.7211C26.3141 26.7708 27.1681 27.6248 28.2237 27.6248Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M33.2529 36.1888C34.3026 36.1888 35.1626 35.3348 35.1626 34.2851C35.1626 33.2354 34.3086 32.3813 33.2529 32.3813C32.1973 32.3813 31.3433 33.2354 31.3433 34.2851C31.3433 35.3348 32.1973 36.1888 33.2529 36.1888Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.90966 31.9066C2.95938 31.9066 3.81931 31.0526 3.81931 30.0028C3.81931 28.9531 2.96531 28.0991 1.90966 28.0991C0.854008 28.0991 0 28.9531 0 30.0028C0 31.0526 0.854008 31.9066 1.90966 31.9066Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M58.0903 31.9066C59.14 31.9066 60 31.0526 60 30.0028C60 28.9531 59.146 28.0991 58.0903 28.0991C57.0347 28.0991 56.1807 28.9531 56.1807 30.0028C56.1807 31.0526 57.0347 31.9066 58.0903 31.9066Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0933 1.90966C28.0933 2.96531 28.9473 3.81931 29.997 3.81931C31.0467 3.81931 31.9007 2.96531 31.9007 1.90966C31.9007 0.854008 31.0467 0 29.997 0C28.9473 0 28.0933 0.854008 28.0933 1.90966Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0933 58.0903C28.0933 59.146 28.9473 60 29.997 60C31.0467 60 31.9007 59.146 31.9007 58.0903C31.9007 57.0347 31.0467 56.1807 29.997 56.1807C28.9473 56.1807 28.0933 57.0347 28.0933 58.0903Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4162_2134">
                                        <rect width="60" height="60" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h3 class="text-[22px] text-white group-hover:text-[#504696] group-focus:text-[#504696] font-bold transition-colors duration-300">SERVICIOS ELÉCTRICOS</h3>
                            <div class="flex flex-row gap-x-[20px] text-[18px] text-white group-hover:text-[#504696] group-focus:text-[#504696] transition-colors duration-300">
                                <ul class="w-full flex flex-col gap-y-[20px] [&_svg>g>path]:fill-white [&_svg>g>path]:group-hover:fill-[#504696] [&_svg>g>path]:group-focus:fill-[#504696] [&_svg>g>path]:transition-colors [&_svg>g>path]:duration-300">
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Diseño de Diagramas Eléctricos.</label>
                                    </li>
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Programación de HMI.</label>
                                    </li>
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Conexión de Tableros Eléctricos..</label>
                                    </li>
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Desconexión y Reconexión de Cableados Eléctricos..</label>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="group px-[60px] py-[80px] flex flex-col relative gap-y-[40px] w-full rounded-[20px] bg-[rgba(80,70,150,0.30)] backdrop-blur-[5px] hover:!bg-white focus:!bg-white transition-all duration-300 cursor-pointer" tabindex="0">
                            <div class="size-[100px] p-[20px] absolute top-[-50px] left-[60px] bg-[#504696] group-hover:bg-[#282D7D] group-focus:bg-[#282D7D] rounded-[20px] transition-colors duration-300">
                                <svg class="[&>g>path]:fill-white [&>g>path]:group-hover:fill-white [&>g>path]:group-focus:fill-white [&>g>path]:transition-colors [&>g>path]:duration-300" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                                <g clip-path="url(#clip0_4162_2121)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.7196 25.0768C26.5472 25.2014 27.3502 25.4196 28.1038 25.7187L28.8449 24.4287L31.6244 26.049L30.8832 27.339C31.5318 27.8562 32.1124 28.4482 32.6312 29.1026L33.9098 28.3547L35.5157 31.1591L34.2372 31.9069C34.5336 32.6734 34.7498 33.4773 34.8734 34.3124H36.3496V37.5529H34.8734C34.7498 38.388 34.5336 39.1981 34.2372 39.9584L35.5157 40.7062L33.9098 43.5105L32.6312 42.7627C32.1186 43.4171 31.5318 44.0029 30.8832 44.5263L31.6244 45.8163L28.8449 47.4366L28.1038 46.1466C27.344 46.4457 26.5472 46.6638 25.7196 46.7885V48.2779H22.5077V46.7885C21.68 46.6638 20.8771 46.4457 20.1235 46.1466L19.3823 47.4366L16.6028 45.8163L17.344 44.5263C16.6955 44.0091 16.1149 43.4171 15.596 42.7627L14.3175 43.5105L12.7115 40.7062L13.9901 39.9584C13.6936 39.1919 13.4774 38.388 13.3539 37.5529H11.8777V34.3124H13.3539C13.4774 33.4773 13.6936 32.6672 13.9901 31.9069L12.7115 31.1591L14.3175 28.3547L15.596 29.1026C16.1087 28.4482 16.6955 27.8624 17.344 27.339L16.6028 26.049L19.3823 24.4287L20.1235 25.7187C20.8832 25.4196 21.68 25.2014 22.5077 25.0768V23.5874H25.7196V25.0768ZM24.1198 27.9808C19.7653 27.9808 16.2322 31.5454 16.2322 35.9389C16.2322 40.3323 19.7653 43.8969 24.1198 43.8969C28.4743 43.8969 32.0074 40.3323 32.0074 35.9389C32.0074 31.5454 28.4743 27.9808 24.1198 27.9808Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.4898 55.8683C45.8925 55.8683 55.9481 45.7229 55.9481 33.2094C55.9481 25.6003 52.2298 18.87 46.5349 14.7632C50.4447 18.8388 52.8536 24.3976 52.8536 30.5172C52.8536 43.0307 42.798 53.1761 30.3953 53.1761C25.5281 53.1761 21.0253 51.6182 17.3502 48.9634C21.433 53.2198 27.1587 55.8683 33.496 55.8683H33.4898Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M41.4638 59.9814C51.2909 60.3865 59.58 52.6839 59.9876 42.7691C60.1359 39.1422 59.2032 35.7209 57.4861 32.8169C58.5485 35.3221 59.092 38.0953 58.9746 40.9993C58.5546 51.3815 49.8703 59.4455 39.58 59.0217C37.4737 58.9345 35.4663 58.4982 33.601 57.7691C35.9419 59.0716 38.6102 59.863 41.4638 59.9814Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M26.5102 4.13184C14.1075 4.13184 4.05188 14.2772 4.05188 26.797C4.05188 34.406 7.77022 41.1364 13.4651 45.2432C9.55528 41.1676 7.14638 35.6088 7.14638 29.4891C7.14638 16.9756 17.202 6.83022 29.6047 6.83022C34.4719 6.83022 38.9747 8.38817 42.6498 11.0429C38.567 6.78659 32.8413 4.13807 26.504 4.13807L26.5102 4.13184Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.5358 0.0123302C8.70878 -0.392738 0.419708 7.31603 0.0120486 17.2309C-0.136191 20.8578 0.796484 24.2853 2.51359 27.1831C1.45121 24.6779 0.907663 21.9047 1.02502 19.0007C1.45121 8.61848 10.1356 0.548267 20.4197 0.978263C22.5259 1.06551 24.5334 1.50174 26.3987 2.23086C24.0578 0.922176 21.3894 0.136967 18.5358 0.0123302Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.4936 14.165C40.0309 14.327 40.5374 14.5514 41.0069 14.8256L41.6183 14.0466L43.2984 15.3927L42.6807 16.1717C43.0575 16.5767 43.3849 17.0254 43.6628 17.5115L44.5831 17.1438L45.3676 19.1567L44.4472 19.5244C44.5708 20.0603 44.6325 20.615 44.6325 21.182L45.6085 21.3254L45.2934 23.4629L44.3175 23.3133C44.1569 23.8555 43.9346 24.3665 43.6628 24.8401L44.4349 25.4571L43.1007 27.1521L42.3287 26.5289C41.9272 26.9091 41.4825 27.2394 41.0007 27.5198L41.3651 28.4484L39.37 29.2398L39.0056 28.3113C38.4744 28.4359 37.9247 28.4982 37.3626 28.4982L37.2144 29.4828L35.0958 29.165L35.244 28.1804C34.7067 28.0184 34.2002 27.794 33.7308 27.5198L33.1193 28.2988L31.4392 26.9527L32.0569 26.1737C31.6801 25.7687 31.3527 25.32 31.0748 24.8339L30.1545 25.2016L29.37 23.1887L30.2904 22.821C30.1668 22.2851 30.1051 21.7304 30.1051 21.1633L29.1292 21.0138L29.4442 18.8763L30.4201 19.0258C30.5807 18.4837 30.803 17.9727 31.0748 17.499L30.3027 16.8759L31.6369 15.1808L32.409 15.804C32.8104 15.4238 33.2552 15.0936 33.7369 14.8131L33.3725 13.8846L35.3676 13.0931L35.732 14.0217C36.2632 13.897 36.8129 13.8347 37.375 13.8347L37.5232 12.8501L39.6418 13.1679L39.4936 14.1525V14.165ZM38.1471 15.9224C35.2687 15.4862 32.5881 17.4928 32.1557 20.3968C31.7233 23.3009 33.7122 26.0055 36.5905 26.4417C39.4689 26.8779 42.1495 24.8713 42.5819 21.9673C43.0143 19.0632 41.0254 16.3586 38.1471 15.9224Z" fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_4162_2121">
                                    <rect width="60" height="60" fill="white"/>
                                    </clipPath>
                                </defs>
                                </svg>
                            </div>
                            <h3 class="text-[22px] text-white group-hover:text-[#504696] group-focus:text-[#504696] font-bold transition-colors duration-300">SERVICIOS MECÁNICOS</h3>
                            <div class="flex flex-row gap-x-[20px] text-[18px] text-white group-hover:text-[#504696] group-focus:text-[#504696] transition-colors duration-300">
                                <ul class="w-full flex flex-col gap-y-[20px] [&_svg>g>path]:fill-white [&_svg>g>path]:group-hover:fill-[#504696] [&_svg>g>path]:group-focus:fill-[#504696] [&_svg>g>path]:transition-colors [&_svg>g>path]:duration-300">
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Cálculo de elemento finito.</label>
                                    </li>
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Mecanizado.</label>
                                    </li>
                                    <li class="flex flex-row gap-x-[10px] items-center">
                                        <svg class="min-h-[30px] min-w-[30px]" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <g clip-path="url(#clip0_4162_522)">
                                                <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="white"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4162_522">
                                                <rect width="24" height="24" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <label>Diseño mecánico.</label>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                
                
                <!-- Botón -->
                <button onclick="openModal()" class="bg-white text-[#504696] text-[18px] md:text-[20px] font-medium px-[40px] py-[16px] rounded-full hover:bg-[#8F85D2] hover:text-white transition-colors duration-200">
                    Más información
                </button>
            </div>
        </section>


        <!-- SECCIÓN GALERÍA -->
        <section class="w-screen min-h-screen flex items-center justify-center relative py-[80px] md:py-[120px] px-[28px]">
            <div class="w-full max-w-[1380px] flex flex-col items-center">
                <h2 class="text-[28px] md:text-[36px] text-[#282D7D] text-center max-w-[800px]">Proyectos reales desarrollados bajo estándares de máxima calidad industrial.</h2>
                
                <!-- Grid de galería -->
                <div class="gap-[24px] grid grid-cols-2 md:grid-cols-4 grid-flow-row-dense w-full mt-[80px]">
                    <img src="<?=importAsset('imagenes/galeria/galeria-1.webp')?>" alt="Proyecto 1"  class="col-span-2 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-2.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-3.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-4.webp')?>" alt="Proyecto 1"  class="row-span-2 h-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-5.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-6.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-7.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-8.webp')?>" alt="Proyecto 1"  class="col-span-2 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-9.webp')?>" alt="Proyecto 1"  class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-10.webp')?>" alt="Proyecto 1" class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-11.webp')?>" alt="Proyecto 1" class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-12.webp')?>" alt="Proyecto 1" class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-13.webp')?>" alt="Proyecto 1" class="row-span-2 h-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-14.webp')?>" alt="Proyecto 1" class="col-span-2 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                    <img src="<?=importAsset('imagenes/galeria/galeria-15.webp')?>" alt="Proyecto 1" class="col-span-1 w-full rounded-[20px] object-cover hover:scale-105 hover:shadow-2xl duration-300">
                </div>
                    
            </div>
        </section>

        <section class="w-screen flex items-center justify-center relative py-[80px] lg:py-[120px] px-[28px]">
            <img src="<?=importAsset('imagenes/fondo-s6-desktop.webp')?>" alt="Calidad INMAUT" class="absolute hidden lg:block top-0 left-0 w-full h-full object-cover object-center z-0">
            <img src="<?=importAsset('imagenes/fondo-s6-mobile.webp')?>" alt="Calidad INMAUT" class="absolute lg:hidden top-0 left-0 w-full h-full object-cover object-center z-0">
            <p class="w-full max-w-[1140px] text-[#FFF] text-[18px] relative z-30 text-center">
                En INMAUT creemos tenazmente que la calidad de nuestros proyectos habla por sí misma; por ello, realizamos integraciones de alta confiabilidad y efectividad, apegándonos a los criterios y normas de calidad de nuestros clientes, satisfaciendo las necesidades impuestas por la industria con objeto de mejora continua para cada uno de nuestros procesos.
            </p>
        </section>

        <section class="w-screen flex flex-row items-center justify-center py-[80px] lg:py-[120px] px-[28px]">
            <div class="w-full max-w-[1140px] gap-x-[30px] gap-y-[40px] flex flex-col lg:flex-row items-center justify-between">
                <div class="flex flex-col gap-y-[20px] min-w-[320px]">
                    <h3 class="text-[30px] text-[#282D7D]">
                        Ubica nuestras oficinas
                    </h3>
                    <div class="flex flex-row items-center gap-x-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                            <g clip-path="url(#clip0_2048_832)">
                                <path d="M14.0002 7C13.0772 7 12.1749 7.2737 11.4075 7.78648C10.6401 8.29925 10.0419 9.02809 9.68873 9.88081C9.33552 10.7335 9.2431 11.6718 9.42317 12.5771C9.60323 13.4823 10.0477 14.3139 10.7003 14.9665C11.353 15.6191 12.1845 16.0636 13.0897 16.2437C13.995 16.4237 14.9333 16.3313 15.786 15.9781C16.6387 15.6249 17.3676 15.0268 17.8804 14.2593C18.3931 13.4919 18.6668 12.5896 18.6668 11.6667C18.6668 10.429 18.1752 9.242 17.3 8.36683C16.4248 7.49167 15.2378 7 14.0002 7ZM14.0002 14C13.5387 14 13.0875 13.8632 12.7038 13.6068C12.3201 13.3504 12.0211 12.986 11.8444 12.5596C11.6678 12.1332 11.6216 11.6641 11.7117 11.2115C11.8017 10.7588 12.0239 10.3431 12.3503 10.0168C12.6766 9.69043 13.0923 9.4682 13.545 9.37817C13.9976 9.28814 14.4667 9.33434 14.8931 9.51095C15.3195 9.68755 15.6839 9.98662 15.9403 10.3703C16.1967 10.7541 16.3335 11.2052 16.3335 11.6667C16.3335 12.2855 16.0877 12.879 15.6501 13.3166C15.2125 13.7542 14.619 14 14.0002 14Z" fill="#504696"/>
                                <path d="M13.9999 28.0004C13.0175 28.0054 12.0482 27.775 11.1731 27.3284C10.2981 26.8819 9.54274 26.2322 8.97038 25.4337C4.52421 19.3005 2.26904 14.6899 2.26904 11.7289C2.26904 8.61767 3.50497 5.63389 5.70492 3.43393C7.90488 1.23397 10.8887 -0.00195312 13.9999 -0.00195312C17.1111 -0.00195312 20.0949 1.23397 22.2948 3.43393C24.4948 5.63389 25.7307 8.61767 25.7307 11.7289C25.7307 14.6899 23.4755 19.3005 19.0294 25.4337C18.457 26.2322 17.7017 26.8819 16.8266 27.3284C15.9516 27.775 14.9823 28.0054 13.9999 28.0004ZM13.9999 2.54488C11.5644 2.54766 9.2294 3.51639 7.50723 5.23856C5.78506 6.96073 4.81632 9.2957 4.81354 11.7312C4.81354 14.0762 7.02204 18.4127 11.0307 23.9415C11.371 24.4103 11.8175 24.7918 12.3335 25.0549C12.8496 25.3179 13.4206 25.4551 13.9999 25.4551C14.5791 25.4551 15.1501 25.3179 15.6662 25.0549C16.1823 24.7918 16.6287 24.4103 16.969 23.9415C20.9777 18.4127 23.1862 14.0762 23.1862 11.7312C23.1834 9.2957 22.2147 6.96073 20.4925 5.23856C18.7704 3.51639 16.4354 2.54766 13.9999 2.54488Z" fill="#504696"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2048_832">
                                <rect width="28" height="28" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="text-[18px] text-[#1E1E1E]">Parque Industrial Querétaro</p>
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.3984746308194!2d-100.33946492451294!3d20.56366520428088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d344f2f0000001%3A0x1234567890abcdef!2sParque%20Industrial%20Quer%C3%A9taro!5e0!3m2!1ses!2smx!4v1738339200000!5m2!1ses!2smx" 
                    class="w-full h-[450px] rounded-[20px] mt-[40px]" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mapa de ubicación Parque Industrial Querétaro"
                    aria-label="Mapa de Google mostrando la ubicación en Parque Industrial Querétaro">
                </iframe>
            </div>
        </section>


        <section class="w-screen flex flex-row items-center justify-center px-[28px] pb-[80px] lg:pb-[120px]">
            <div class="w-full max-w-[1360px] bg-[#EBEBEB] p-[28px] lg:p-[80px] rounded-[20px] flex flex-col items-center text-center">
                <h2 class="text-[36px] text-[#282D7D] text-center max-w-[850px]">La calidad de nuestro trabajo refleja el <strong>compromiso</strong> que tenemos con cada uno de nuestros clientes.</h2>
                <div class="flex flex-col lg:flex-row gap-[60px] mt-[60px]">
                    <div class="flex flex-col items-center w-full">
                        <svg class="min-w-[60px] min-h-[60px]" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_4164_473)">
                                <path d="M37.5 12.5C40.2625 12.5 42.5 10.2625 42.5 7.5V5H45C46.38 5 47.5 6.12 47.5 7.5V12.5C47.5 13.88 46.38 15 45 15H40C37.5 15 37.5 12.5 37.5 12.5ZM59.0225 54.8725C57.455 58.0375 54.285 60 50.755 60H9.24502C5.71502 60 2.54503 58.0375 0.975025 54.8725C-0.594975 51.71 -0.244975 48 1.88753 45.1875C1.93003 45.135 27.5 16.545 27.5 16.545V2.5C27.5 1.1175 28.62 0 30 0H37.5C38.88 0 40 1.12 40 2.5V7.5C40 8.88 38.88 10 37.5 10H32.5V16.545L57.98 45.0325C60.2425 48.0025 60.595 51.7125 59.0225 54.875V54.8725ZM19.7825 32.6725L24.4925 39.875C24.7775 40.29 25.2475 40.29 25.62 39.8275L29.215 34.795C29.6825 34.14 30.435 33.75 31.2375 33.7475C31.9975 33.7475 32.7975 34.1275 33.27 34.7775L35.11 37.31C35.405 37.6575 35.78 37.6425 36.0675 37.27L39.395 31.7475L29.9975 21.2475L19.78 32.67L19.7825 32.6725ZM54.125 48.21L42.885 35.65L40.3375 39.875C39.3475 41.4825 37.6525 42.4725 35.79 42.545C33.9925 42.6 32.375 41.8575 31.2725 40.515L29.6875 42.7325C28.6175 44.235 26.8825 45.1275 25.04 45.1275C25.025 45.1275 25.01 45.1275 24.9975 45.1275C23.14 45.115 21.4 44.195 20.3425 42.665L16.33 36.53L5.81752 48.2825C4.87252 49.5825 4.73502 51.2075 5.45253 52.6525C6.18252 54.1225 7.60003 55 9.24253 55H50.755C52.3975 55 53.815 54.12 54.545 52.6525C55.275 51.18 55.1175 49.5175 54.125 48.21Z" fill="url(#paint0_linear_4164_473)"/>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_4164_473" x1="29.9948" y1="60" x2="29.9948" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <clipPath id="clip0_4164_473">
                                <rect width="60" height="60" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <h3 class="mt-[40px] text-[36px] text-[#282D7D]">Misión</h3>
                        <p class="text-[18px] text-[#1E1E1E] mt-[20px]">Somos una empresa dedicada a la integración, contamos con maquinaria y con un equipo de especialistas capacitados para la realización de cada proyecto, desarrollamos soluciones constructivas para satisfacer las demandas de nuestros clientes, ofreciendo soluciones a la medida para todo tipo de proyectos de integración.</p>
                    </div>
                    <div class="flex flex-col items-center w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_4164_480)">
                                <path d="M56.34 16.16C54.58 14.4 52.3875 13.235 50 12.7525V7.5C50 3.365 46.635 0 42.5 0C38.365 0 35 3.365 35 7.5V12.5H25V7.5C25 3.365 21.635 0 17.5 0C13.365 0 10 3.365 10 7.5V12.7525C7.615 13.235 5.42 14.4 3.66 16.16C1.3 18.52 0 21.66 0 25V46.25C0 53.8325 6.1675 60 13.75 60C21.1975 60 27.265 54.045 27.48 46.65C27.48 46.615 27.5 46.585 27.5 46.55V32.5C27.5 31.1225 28.6225 30 30 30C31.3775 30 32.5 31.1225 32.5 32.5V46.55C32.5 46.585 32.52 46.615 32.52 46.65C32.735 54.045 38.8025 60 46.25 60C53.8325 60 60 53.8325 60 46.25V25C60 21.6625 58.7 18.5225 56.34 16.16ZM40 7.5C40 6.1225 41.1225 5 42.5 5C43.8775 5 45 6.1225 45 7.5V12.5H40V7.5ZM17.5 5C18.8775 5 20 6.1225 20 7.5V12.5H15V7.5C15 6.1225 16.1225 5 17.5 5ZM13.75 55C8.925 55 5 51.075 5 46.25C5 41.425 8.925 37.5 13.75 37.5C18.575 37.5 22.5 41.425 22.5 46.25C22.5 51.075 18.575 55 13.75 55ZM30 25C25.865 25 22.5 28.365 22.5 32.5V35.6525C20.12 33.685 17.07 32.5 13.75 32.5C10.43 32.5 7.38 33.685 5 35.6525V25C5 22.9975 5.78 21.1125 7.1975 19.6975C8.6125 18.2825 10.495 17.5025 12.5 17.5025H47.5025C49.505 17.5025 51.3875 18.2825 52.805 19.6975C54.2225 21.1125 55 22.9975 55 25V35.6525C52.62 33.685 49.57 32.5 46.25 32.5C42.93 32.5 39.88 33.685 37.5 35.6525V32.5C37.5 28.365 34.135 25 30 25ZM46.25 55C41.425 55 37.5 51.075 37.5 46.25C37.5 41.425 41.425 37.5 46.25 37.5C51.075 37.5 55 41.425 55 46.25C55 51.075 51.075 55 46.25 55Z" fill="url(#paint0_linear_4164_480)"/>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_4164_480" x1="30" y1="60" x2="30" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <clipPath id="clip0_4164_480">
                                <rect width="60" height="60" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <h3 class="mt-[40px] text-[36px] text-[#282D7D]">Visión</h3>
                        <p class="text-[18px] text-[#1E1E1E] mt-[20px]">Ser una empresa líder en integración y automatización. Otorgando soluciones de alta calidad cumpliendo las necesidades de nuestros clientes.</p>
                    </div>
                    <div class="flex flex-col items-center w-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
                            <g clip-path="url(#clip0_4164_484)">
                                <path d="M57.8675 23.6775L55.9 21C54.5366 19.1448 52.7569 17.6355 50.704 16.5934C48.6511 15.5513 46.3823 15.0055 44.08 15H15.9575C13.7026 15.0059 11.4791 15.5294 9.45837 16.5302C7.43769 17.531 5.67375 18.9824 4.30249 20.7725L2.24999 23.4575C0.583697 25.6558 -0.199737 28.398 0.0537945 31.1447C0.307326 33.8914 1.57947 36.4439 3.61999 38.3L23.595 57.5675C25.3494 59.1321 27.6193 59.9946 29.97 59.99C32.3705 59.9853 34.685 59.0951 36.47 57.49L56.31 38.4075C58.3622 36.5903 59.6601 34.0708 59.9484 31.3449C60.2366 28.6189 59.4943 25.8837 57.8675 23.6775ZM51.8675 23.945L53.835 26.63C54.0327 26.9047 54.2066 27.1958 54.355 27.5H42.3775C42.1965 26.3028 41.8847 25.1291 41.4475 24L39.8475 20H44.08C45.5961 20.0029 47.0904 20.3613 48.4429 21.0464C49.7954 21.7315 50.9683 22.7243 51.8675 23.945ZM29.975 50.22L23.0525 34.545C22.8021 33.882 22.613 33.1975 22.4875 32.5H37.3675C37.2626 33.0497 37.1155 33.5904 36.9275 34.1175L29.975 50.22ZM22.75 27.5C22.8545 27.0518 22.9856 26.6102 23.1425 26.1775L25.6025 20H34.4625L36.805 25.8575C37.0107 26.3924 37.1778 26.9413 37.305 27.5H22.75ZM8.27749 23.8025C9.1814 22.6234 10.3438 21.6674 11.6753 21.0081C13.0068 20.3489 14.4718 20.004 15.9575 20H20.2075L18.5 24.3225C18.088 25.3481 17.7806 26.4127 17.5825 27.5H5.61249C5.78397 27.1466 5.99086 26.8116 6.22999 26.5L8.27749 23.8025ZM7.02749 34.635C6.37531 34.0434 5.86293 33.3141 5.52749 32.5H17.4575C17.6233 33.8469 17.9481 35.1695 18.425 36.44L25.4925 52.44L7.02749 34.635ZM34.4275 52.535L41.5625 36C41.9766 34.8684 42.265 33.6947 42.4225 32.5H54.5C54.1461 33.3582 53.6055 34.1268 52.9175 34.75L34.4275 52.535Z" fill="url(#paint0_linear_4164_484)"/>
                                <path d="M30 10C30.663 10 31.2989 9.73661 31.7678 9.26777C32.2366 8.79893 32.5 8.16304 32.5 7.5V2.5C32.5 1.83696 32.2366 1.20107 31.7678 0.732233C31.2989 0.263392 30.663 0 30 0C29.337 0 28.7011 0.263392 28.2322 0.732233C27.7634 1.20107 27.5 1.83696 27.5 2.5V7.5C27.5 8.16304 27.7634 8.79893 28.2322 9.26777C28.7011 9.73661 29.337 10 30 10Z" fill="url(#paint1_linear_4164_484)"/>
                                <path d="M41.3825 9.75007C41.6776 9.89847 41.9993 9.98691 42.3288 10.0103C42.6584 10.0336 42.9893 9.9914 43.3024 9.88609C43.6156 9.78078 43.9047 9.61446 44.1532 9.39672C44.4016 9.17899 44.6045 8.91417 44.75 8.61757L47.25 3.61757C47.5464 3.02415 47.5949 2.33729 47.3848 1.70811C47.1748 1.07892 46.7234 0.558947 46.13 0.262568C45.5366 -0.0338115 44.8497 -0.0823161 44.2205 0.127725C43.5913 0.337765 43.0714 0.789146 42.775 1.38257L40.275 6.38257C40.1257 6.67622 40.0359 6.99649 40.0108 7.32496C39.9857 7.65343 40.0258 7.98362 40.1287 8.29655C40.2316 8.60949 40.3953 8.899 40.6105 9.14844C40.8257 9.39789 41.088 9.60235 41.3825 9.75007Z" fill="url(#paint2_linear_4164_484)"/>
                                <path d="M15.2625 8.61757C15.5589 9.21265 16.0795 9.66562 16.7099 9.87683C17.3402 10.088 18.0287 10.0402 18.6238 9.74382C19.2188 9.44744 19.6718 8.9268 19.883 8.29645C20.0942 7.66609 20.0464 6.97765 19.75 6.38257L17.25 1.38257C17.1033 1.08874 16.9001 0.826685 16.6521 0.611378C16.404 0.396072 16.116 0.231726 15.8045 0.127725C15.1753 -0.0823161 14.4884 -0.0338115 13.895 0.262568C13.3016 0.558947 12.8502 1.07892 12.6402 1.70811C12.4301 2.33729 12.4786 3.02415 12.775 3.61757L15.2625 8.61757Z" fill="url(#paint3_linear_4164_484)"/>
                            </g>
                            <defs>
                                <linearGradient id="paint0_linear_4164_484" x1="30.0081" y1="59.99" x2="30.0081" y2="15" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_4164_484" x1="30" y1="10" x2="30" y2="0" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <linearGradient id="paint2_linear_4164_484" x1="43.7585" y1="10.0165" x2="43.7585" y2="-0.000976562" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <linearGradient id="paint3_linear_4164_484" x1="16.2622" y1="10.0067" x2="16.2622" y2="-0.000976562" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#282D7D"/>
                                <stop offset="1" stop-color="#8F85D2"/>
                                </linearGradient>
                                <clipPath id="clip0_4164_484">
                                <rect width="60" height="60" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <h3 class="mt-[40px] text-[36px] text-[#282D7D]">Valores</h3>
                        <ul class="flex flex-col text-left gap-y-[20px] mt-[20px]">
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Transparencia y ética en la gestión.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Desarrollo del capital humano.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Eficiencia con equipo.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Solidaridad social.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Administración responsable.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Calidad, innovación y mejora continua.</span>
                            </li>
                            <li class="flex flex-row gap-x-[10px] items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_4164_488)">
                                        <path d="M18.214 9.098C18.601 9.492 18.595 10.125 18.2 10.512L13.774 14.857C12.991 15.625 11.983 16.008 10.974 16.008C9.976 16.008 8.978 15.632 8.198 14.879L6.299 13.012C5.905 12.625 5.9 11.992 6.287 11.598C6.673 11.203 7.308 11.198 7.701 11.586L9.594 13.447C10.37 14.197 11.595 14.193 12.375 13.429L16.8 9.085C17.193 8.697 17.824 8.704 18.214 9.098ZM24 12C24 18.617 18.617 24 12 24C5.383 24 0 18.617 0 12C0 5.383 5.383 0 12 0C18.617 0 24 5.383 24 12ZM22 12C22 6.486 17.514 2 12 2C6.486 2 2 6.486 2 12C2 17.514 6.486 22 12 22C17.514 22 22 17.514 22 12Z" fill="#504696"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4164_488">
                                        <rect width="24" height="24" fill="white"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                                <span>Compromiso, constancia y disciplina..</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>



        <?php $this->componente('popup-form', ['landing_id' => $landing_id]);?>

    
        <?php $this->componente('footer');?>

    </main>
    <script src="<?=importAsset('scripts/carrusel-equipo.js')?>"></script>
</body>
</html>
</body>
</html>