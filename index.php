<?php
$title = 'Главная';
require_once __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="eyebrow">Цифровой сервис для жителей</p>
            <h1>Информационный портал жилищного комитета</h1>
            <p class="lead">
                Портал предназначен для информирования граждан, приема обращений,
                публикации документов и повышения прозрачности работы жилищного комитета.
            </p>
            <div class="hero-actions">
                <a class="button" href="appeals.php">Подать обращение</a>
                <a class="button button-outline" href="services.php">Посмотреть услуги</a>
            </div>
        </div>
        <div class="info-card">
            <h2>Основные возможности</h2>
            <ul>
                <li>новости и уведомления;</li>
                <li>раздел нормативных документов;</li>
                <li>форма подачи обращения;</li>
                <li>поиск по материалам сайта;</li>
                <li>личный кабинет с ролями пользователей.</li>
            </ul>
        </div>
    </div>
</section>

<section class="container section">
    <h2>Направления работы</h2>
    <div class="cards">
        <article class="card">
            <h3>Обращения граждан</h3>
            <p>Прием сообщений о проблемах содержания жилого фонда и дворовых территорий.</p>
        </article>
        <article class="card">
            <h3>Информационная поддержка</h3>
            <p>Публикация инструкций, регламентов, памяток и ответов на типовые вопросы.</p>
        </article>
        <article class="card">
            <h3>Контроль сроков</h3>
            <p>Сотрудники могут просматривать обращения и отслеживать статус их обработки.</p>
        </article>
    </div>
</section>

<section class="container section">
    <div class="section-head">
        <h2>Последние новости</h2>
        <a href="news.php">Все новости</a>
    </div>
    <div class="news-list">
        <?php foreach (array_slice($NEWS, 0, 3) as $item): ?>
            <article class="news-item">
                <time><?= h($item['date']) ?></time>
                <h3><?= h($item['title']) ?></h3>
                <p><?= h($item['text']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
