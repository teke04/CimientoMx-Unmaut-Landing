<?php
// Las variables $rutasWeb, $configuracionSEO y $CONFIG ya están disponibles desde el controlador
// Header XML ya está establecido en el controlador
// lastmod se calcula automáticamente en el controlador basado en fecha de modificación de archivos

echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($rutasWeb as $rutaPath): ?>
    <url>
        <loc>        <?= htmlspecialchars(ruta($rutaPath)); ?></loc>
        <lastmod>    <?= $configuracionSEO[$rutaPath]['lastmod']; ?></lastmod>
        <changefreq> <?= $configuracionSEO[$rutaPath]['changefreq']; ?></changefreq>
        <priority>   <?= $configuracionSEO[$rutaPath]['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>