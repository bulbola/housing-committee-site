<?php
$title = 'Личный кабинет';
require_once __DIR__ . '/includes/header.php';
require_login();

$user = current_user();
$dataFile = __DIR__ . '/data/appeals.json';
$appeals = file_exists($dataFile)
    ? json_decode((string) file_get_contents($dataFile), true)
    : [];

if (!is_array($appeals)) {
    $appeals = [];
}
?>

<section class="container page">
    <h1>Личный кабинет</h1>

    <div class="profile-card">
        <p><strong>Пользователь:</strong> <?= h($user['name']) ?></p>
        <p><strong>Логин:</strong> <?= h($user['login']) ?></p>
        <p><strong>Роль:</strong> <?= h($user['role']) ?></p>
        <a class="button button-outline" href="logout.php">Выйти</a>
    </div>

    <?php if ($user['role'] === 'Сотрудник' || $user['role'] === 'Администратор'): ?>
        <h2>Поступившие обращения</h2>

        <?php if (count($appeals) === 0): ?>
            <p>Обращения пока не поступали.</p>
        <?php else: ?>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Дата</th>
                            <th>Заявитель</th>
                            <th>Тема</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach (array_reverse($appeals) as $appeal): ?>
                            <tr>
                                <td><?= h($appeal['date']) ?></td>
                                <td><?= h($appeal['name']) ?></td>
                                <td><?= h($appeal['topic']) ?></td>
                                <td><?= h($appeal['status']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

    <?php else: ?>
        <h2>Возможности пользователя</h2>
        <ul class="check-list">
            <li>просмотр новостей и документов;</li>
            <li>отправка обращения в жилищный комитет;</li>
            <li>поиск информации по сайту;</li>
            <li>использование версии для слабовидящих.</li>
        </ul>
    <?php endif; ?>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
