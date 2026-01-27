# Robots.txt generado dinámicamente
# Sitio: <?= env('EMPRESA'); ?>

# Permitir acceso a todos los robots por defecto
User-agent: *

# Bloquear todas las rutas administrativas
Disallow: <?= parse_url(ruta('admin/'), PHP_URL_PATH); ?>

# Bloquear rutas específicas de sistema
<?php foreach ($rutasEspecificasBloqueadas as $ruta): ?>
Disallow: <?= parse_url(ruta($ruta), PHP_URL_PATH); ?>

<?php endforeach; ?>

# Permitir recursos públicos
Allow: <?= parse_url(ruta('recursos/'), PHP_URL_PATH); ?>


# Sitemap
Sitemap: <?= $sitemap; ?>
