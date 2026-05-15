<?php
$title = 'Карта сайта';
require_once __DIR__ . '/includes/header.php';
?>

<section class="container page">
    <h1>Карта сайта</h1>
    <p class="lead">Страница содержит структуру информационного портала.</p>

    <ul class="sitemap">
        <li><a href="index.php">Главная</a></li>
        <li><a href="news.php">Новости</a></li>
        <li><a href="services.php">Услуги</a></li>
        <li><a href="documents.php">Документы</a></li>
        <li><a href="appeals.php">Обращения граждан</a></li>
        <li><a href="contacts.php">Контакты</a></li>
        <li><a href="search.php">Поиск</a></li>
        <li><a href="login.php">Личный кабинет</a></li>
        <li><a href="404.php">Страница 404</a></li>
    </ul>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
