<!DOCTYPE html>
<html lang="ES">
<head>
    <?php $this->plantilla('metas-basicas')?>
    <?php $this->plantilla('estilos')?>

    <title>Gracias</title>
    <meta name="description" content="Gracias por tu mensaje. Nos pondremos en contacto contigo a la brevedad.">
    <meta name="robots" content="noindex, nofollow">
    <?= configuracion('tag_manager_head') ?>
</head>
<body class="w-screen overflow-x-clip flex flex-col">
    <?= configuracion('tag_manager_body') ?>

    <section class="w-screen min-h-screen flex flex-col items-center justify-center px-[28px] py-[60px] lg:py-[120px] relative">
        <img src="<?=importAsset('imagenes/fondo-gracias-desktop.webp')?>" alt="Fondo" class="hidden lg:block absolute top-0 left-0 w-full h-full object-cover pointer-events-none z-0" loading="eager">
        <img src="<?=importAsset('imagenes/fondo-gracias-mobile.webp')?>" alt="Fondo" class="lg:hidden absolute top-0 left-0 w-full h-full object-cover pointer-events-none z-0" loading="eager">

        <div class="w-full max-w-[1230px] flex flex-row items-center relative z-40">
            <div class="flex flex-col w-full max-w-[812px]">
                <img src="<?=importAsset('imagenes/logo-blanco.svg')?>" alt="Icono de gracias" class="w-[340px]" loading="eager">
                <h1 class="mt-[60px] text-[50px] font-bold text-[#FFF]">
                    Hemos recibido tu información, ¡muchas gracias por contactarnos!
                </h1>
                <p class="mt-[20px] text-[26px] text-[#FFF]">
                    Ya tenemos tus datos, ahora serás asignado a un asesor que se pondrá en contacto contigo a la brevedad posible.
                </p>
                <p class="mt-[60px] text-[26px] text-[#FFF]">Mándanos un WhatsApp si quieres recibir atención inmediata</p>
                <div class="mt-[20px] flex flex-row gap-x-[20px]">
                    <!-- Botón Habla con un asesor -->
                    <a href="tel:+524421137720" class="px-[40px] py-[16px] bg-[#504696] rounded-full text-white text-[18px] font-semibold hover:bg-[#3d3674] transition-all flex items-center gap-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Habla con un asesor
                    </a>

                    <!-- Botón WhatsApp -->
                    <a href="https://wa.me/5214421137720" target="_blank" rel="noopener noreferrer" class="px-[40px] py-[16px] bg-[#25D366] rounded-full text-white text-[18px] font-semibold hover:bg-[#20BA5A] transition-all flex items-center gap-[10px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="white">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                        </svg>
                        442 113 7720
                    </a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>