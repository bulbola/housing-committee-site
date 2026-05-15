<?php
$title = 'Документы';
require_once __DIR__ . '/includes/header.php';
?>

<section class="container page">
    <h1>Документы</h1>
    <p class="lead">Раздел предназначен для размещения регламентов, памяток и инструкций.</p>

    <div class="document-list">
        <?php foreach ($DOCUMENTS as $document): ?>
            <article class="document">
                <h2><?= h($document) ?></h2>
                <p>
                    Документ используется для информирования пользователей о порядке получения
                    услуги и правилах подготовки обращения.
                </p>
                <a href="404.php">Скачать образец</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
