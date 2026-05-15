<?php
$title = 'Новости';
require_once __DIR__ . '/includes/header.php';
?>

<section class="container page">
    <h1>Новости</h1>
    <p class="lead">Раздел содержит информационные сообщения жилищного комитета.</p>

    <div class="news-list">
        <?php foreach ($NEWS as $item): ?>
            <article class="news-item">
                <time><?= h($item['date']) ?></time>
                <h2><?= h($item['title']) ?></h2>
                <p><?= h($item['text']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
