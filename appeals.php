<?php
$title = 'Обращения граждан';
require_once __DIR__ . '/includes/header.php';

$message = '';
$dataFile = __DIR__ . '/data/appeals.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $topic = trim($_POST['topic'] ?? '');
    $text = trim($_POST['text'] ?? '');

    if ($name === '' || $email === '' || $topic === '' || $text === '') {
        $message = 'Заполните все поля формы.';
    } else {
        $appeals = file_exists($dataFile)
            ? json_decode((string) file_get_contents($dataFile), true)
            : [];

        if (!is_array($appeals)) {
            $appeals = [];
        }

        $appeals[] = [
            'date' => date('d.m.Y H:i'),
            'name' => $name,
            'email' => $email,
            'topic' => $topic,
            'text' => $text,
            'status' => 'Новое'
        ];

        file_put_contents($dataFile, json_encode($appeals, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        $message = 'Обращение принято. Информация сохранена в системе.';
    }
}
?>

<section class="container page">
    <h1>Обращения граждан</h1>
    <p class="lead">
        Форма позволяет направить сообщение по вопросам жилищного фонда,
        обслуживания дома или благоустройства территории.
    </p>

    <?php if ($message !== ''): ?>
        <div class="alert"><?= h($message) ?></div>
    <?php endif; ?>

    <form class="form" method="post" action="appeals.php">
        <label>
            ФИО
            <input type="text" name="name" placeholder="Иванов Иван Иванович">
        </label>

        <label>
            Электронная почта
            <input type="email" name="email" placeholder="example@mail.ru">
        </label>

        <label>
            Тема обращения
            <input type="text" name="topic" placeholder="Содержание общего имущества">
        </label>

        <label>
            Текст обращения
            <textarea name="text" rows="6" placeholder="Опишите проблему"></textarea>
        </label>

        <button class="button" type="submit">Отправить обращение</button>
    </form>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
