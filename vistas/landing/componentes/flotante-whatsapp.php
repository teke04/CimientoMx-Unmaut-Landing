<?php
$whatsapp_num = configuracion('whatsapp_num');
$whatsapp_msg = configuracion('whatsapp_msg');

// Construir URL solo si hay número configurado
if ($whatsapp_num):
    $url_whatsapp = 'https://api.whatsapp.com/send/?phone=' . urlencode($whatsapp_num);
    if ($whatsapp_msg) {
        $url_whatsapp .= '&text=' . urlencode($whatsapp_msg);
    }
?>
<!-- Componente Flotante de WhatsApp -->
<div class="fixed bottom-8 right-8 z-[100] group">
    <!-- Tooltip con mensaje de WhatsApp -->
    <div class="absolute bottom-full right-0 mb-4 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform group-hover:-translate-y-2">
        <div class="relative bg-[#504696] text-white px-6 py-4 rounded-2xl shadow-xl max-w-[280px] min-w-[240px]">
            <p class="text-sm leading-relaxed"><?= htmlspecialchars($whatsapp_msg ?: 'Hola, ¿en qué puedo ayudarte?') ?></p>
            <!-- Flecha apuntando hacia abajo -->
            <div class="absolute -bottom-2 right-8 w-4 h-4 bg-[#504696] transform rotate-45"></div>
        </div>
    </div>
    
    <!-- Botón de WhatsApp -->
    <div class="flex items-center justify-center hover:scale-125 duration-700 hover:brightness-150 rotate-in-from-right">
        <a href="<?= $url_whatsapp ?>"
        target="_blank" rel="noopener">
            <img 
                src='<?=importAsset('logoWA.svg')?>'
                alt="WhatsApp" 
                class="size-12 rounded-full shadow-lg hover:scale-130 transition-transform duration-300 animate-scale-pulse" 
            />
        </a>

        <span class="absolute size-12 -z-10 rounded-full border-2 border-green-500/50 animate-ping-slow"></span>
    </div>
</div>
<?php endif; ?>