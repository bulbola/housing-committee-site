<?php
http_response_code(404);
$title = 'Страница не найдена';
require_once __DIR__ . '/includes/header.php';
?>

<section class="container page error-page">
    <h1>404</h1>
    <p class="lead">Запрашиваемая страница не найдена.</p>
    <p>
        Возможно, адрес был введен с ошибкой или документ временно недоступен.
        Перейдите на главную страницу или воспользуйтесь картой сайта.
    </p>
    <div class="hero-actions">
        <a class="button" href="index.php">На главную</a>
        <a class="button button-outline" href="sitemap.php">Карта сайта</a>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
