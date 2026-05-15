<?php
$title = 'Поиск';
require_once __DIR__ . '/includes/header.php';

$query = trim($_GET['q'] ?? '');
$items = [];

foreach ($NEWS as $item) {
    $items[] = [
        'type' => 'Новость',
        'title' => $item['title'],
        'text' => $item['text'],
        'url' => 'news.php'
    ];
}

foreach ($SERVICES as $service) {
    $items[] = [
        'type' => 'Услуга',
        'title' => $service,
        'text' => 'Информационная услуга жилищного комитета',
        'url' => 'services.php'
    ];
}

foreach ($DOCUMENTS as $document) {
    $items[] = [
        'type' => 'Документ',
        'title' => $document,
        'text' => 'Документ или инструкция для пользователей портала',
        'url' => 'documents.php'
    ];
}

$results = [];

if ($query !== '') {
    foreach ($items as $item) {
        $haystack = mb_strtolower($item['title'] . ' ' . $item['text']);
        if (mb_strpos($haystack, mb_strtolower($query)) !== false) {
            $results[] = $item;
        }
    }
}
?>

<section class="container page">
    <h1>Поиск по сайту</h1>

    <form class="search-form" method="get" action="search.php">
        <input type="search" name="q" value="<?= h($query) ?>" placeholder="Введите запрос">
        <button class="button" type="submit">Найти</button>
    </form>

    <?php if ($query !== ''): ?>
        <h2>Результаты поиска</h2>

        <?php if (count($results) === 0): ?>
            <p>По запросу ничего не найдено.</p>
        <?php else: ?>
            <div class="news-list">
                <?php foreach ($results as $result): ?>
                    <article class="news-item">
                        <span class="tag"><?= h($result['type']) ?></span>
                        <h3><a href="<?= h($result['url']) ?>"><?= h($result['title']) ?></a></h3>
                        <p><?= h($result['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
