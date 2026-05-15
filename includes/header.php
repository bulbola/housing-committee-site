<?php
require_once __DIR__ . '/config.php';
$current = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?= page_title($title ?? 'Главная') ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Информационный портал жилищного комитета">
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/main.js"></script>
</head>
<body class="<?= h(get_theme_class()) ?>">
<header class="site-header">
    <div class="container header-grid">
        <a class="logo" href="index.php">
            <span class="logo-mark">ЖК</span>
            <span class="logo-text">Жилищный комитет</span>
        </a>

        <nav class="main-nav" aria-label="Главное меню">
            <a class="<?= $current === 'index.php' ? 'active' : '' ?>" href="index.php">Главная</a>
            <a class="<?= $current === 'news.php' ? 'active' : '' ?>" href="news.php">Новости</a>
            <a class="<?= $current === 'services.php' ? 'active' : '' ?>" href="services.php">Услуги</a>
            <a class="<?= $current === 'documents.php' ? 'active' : '' ?>" href="documents.php">Документы</a>
            <a class="<?= $current === 'appeals.php' ? 'active' : '' ?>" href="appeals.php">Обращения</a>
            <a class="<?= $current === 'contacts.php' ? 'active' : '' ?>" href="contacts.php">Контакты</a>
        </nav>

        <div class="header-actions">
            <a class="theme-link" href="theme.php">
                <?= get_theme_class() === 'theme-accessible' ? 'Обычная версия' : 'Версия для слабовидящих' ?>
            </a>
            <?php if (is_logged_in()): ?>
                <a class="button button-small" href="dashboard.php">Личный кабинет</a>
            <?php else: ?>
                <a class="button button-small" href="login.php">Вход</a>
            <?php endif; ?>
        </div>
    </div>
</header>

<main>
