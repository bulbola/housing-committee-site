<?php
$title = 'Услуги';
require_once __DIR__ . '/includes/header.php';
?>

<section class="container page">
    <h1>Услуги</h1>
    <p class="lead">
        На странице представлены основные услуги и информационные сервисы портала.
    </p>

    <div class="cards">
        <?php foreach ($SERVICES as $index => $service): ?>
            <article class="card">
                <span class="number"><?= $index + 1 ?></span>
                <h2><?= h($service) ?></h2>
                <p>
                    Услуга направлена на повышение доступности информации и сокращение времени
                    взаимодействия жителей с жилищным комитетом.
                </p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
