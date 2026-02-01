<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">
    <title>Aviso de Privacidad - <?= env('EMPRESA') ?></title>
    <?php $this->plantilla('estilos'); ?>
</head>
<body class="bg-white">

    <?php $this->componente('navbar'); ?>

    <main class="pt-[180px] pb-[100px] px-[28px]">
        <div class="max-w-[900px] mx-auto">
            
            <!-- Título principal -->
            <h1 class="text-[42px] md:text-[52px] font-bold text-[#504696] text-center mb-[60px]">
                Aviso de Privacidad de INMAUT
            </h1>

            <!-- Introducción -->
            <div class="mb-[50px]">
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    A continuación se explica cómo INMAUT gestiona y salvaguarda la información suministrada por los usuarios en nuestro sitio web, garantizando la protección de sus datos personales.
                </p>
            </div>

            <!-- Recolección y uso de Información -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Recolección y uso de Información
                </h2>
                <div class="space-y-[20px] text-[18px] text-[#1E1E1E] leading-relaxed">
                    <p>
                        Obtenemos datos que los titulares al navegar en nuestro sitio Web. Esto abarca:
                    </p>
                    <ul class="list-disc pl-[30px] space-y-[10px]">
                        <li>
                            <strong>Información de Identificación Personal:</strong> Tu nombre y email, que facilitan la comunicación personalizada entre INMAUT y nuestros usuarios.
                        </li>
                        <li>
                            <strong>Información Transaccional:</strong> Si efectúas una compra o pides un servicio, recabamos la información necesaria para procesar tu solicitud (nombre y la información solicitada en los formularios del sitio) para ayudarnos a proporcionar productos y servicios, a través de <a href="mailto:privacidad@inmaut.com.mx" class="text-[#504696] underline hover:text-[#282D7D]">privacidad@inmaut.com.mx</a> Te solicitará datos aportando tu revocación o activar la identificación válida. Contáctanos en un máximo de 30 días hábiles. Recuérdanos el recordar por correo electrónico.
                        </li>
                    </ul>
                </div>
            </section>

            <!-- Protección de la Información -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Protección de la Información
                </h2>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    En <strong>INMAUT</strong>, la seguridad de tus datos es primordial. Adoptamos medidas de seguridad avanzadas y protocolos estrictos para prevenir accesos no autorizados y filtraciones. Nuestro equipo brinda especial cuidado en garantizar que la continuamente se aplican medidas de seguridad actualizadas y efectivas.
                </p>
            </section>

            <!-- Compartir información personal -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Compartir información personal
                </h2>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    Te aseguramos que no compartiremos tu información personal con terceros sin tu consentimiento, salvo que lo exija la ley o sea estrictamente necesario para ejecutar los productos y/o servicios que solicitaste.
                </p>
            </section>

            <!-- Derechos ARCO -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Derechos ARCO
                </h2>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    Tienes derecho a conocer qué datos personales tenemos sobre ti, para qué los usamos y las condiciones de uso (Acceso). Puedes solicitar la actualización de tus datos o exigir la rectificación en caso de que sean incorrectos (Rectificación), y eliminar el uso de tus datos para determinados fines (Cancelación). Para ejercer estos derechos, envía tu solicitud a <a href="mailto:privacidad@inmaut.com.mx" class="text-[#504696] underline hover:text-[#282D7D]">privacidad@inmaut.com.mx</a>
                </p>
            </section>

            <!-- Política de Cookies -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Política de Cookies
                </h2>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    Explicamos el uso de cookies en nuestro sitio web. Estas son pequeños archivos guardados en tu dispositivo para mejorar la experiencia de vista. Las usamos para analizar el tráfico del sitio y personalizar contenido. Puedes analizar y administrar el uso de cookies mediante la configuración de tu navegador, pero ten en cuenta que al deshabilitar las cookies, algunas funciones podrían no operar correctamente.
                </p>
            </section>

            <!-- Cambios en el Aviso de Privacidad -->
            <section class="mb-[50px]">
                <h2 class="text-[32px] font-bold text-[#504696] mb-[25px]">
                    Cambios en el Aviso de Privacidad
                </h2>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed">
                    Este aviso puede cambiar o actualizarse por diversas razones. Te recomendamos revisarlo regularmente.
                </p>
                <p class="text-[18px] text-[#1E1E1E] leading-relaxed mt-[15px]">
                    Para cualquier duda, contáctanos en <a href="mailto:privacidad@inmaut.com.mx" class="text-[#504696] underline hover:text-[#282D7D]">privacidad@inmaut.com.mx</a>
                </p>
            </section>

            <!-- Última actualización -->
            <div class="text-center pt-[40px] border-t border-gray-200">
                <p class="text-[16px] text-gray-600">
                    Última actualización: 2016
                </p>
            </div>

        </div>
    </main>

    <?php $this->componente('footer'); ?>
    <?php $this->componente('flotante-whatsapp'); ?>

</body>
</html>
