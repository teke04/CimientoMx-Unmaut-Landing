<?php
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($rutasWeb as $rutaPath): ?>
    <url>
        <loc><?= htmlspecialchars(ruta($rutaPath)); ?></loc>
        <lastmod><?= $configuracionSEO[$rutaPath]['lastmod']; ?></lastmod>
        <changefreq><?= $configuracionSEO[$rutaPath]['changefreq']; ?></changefreq>
        <priority><?= $configuracionSEO[$rutaPath]['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>