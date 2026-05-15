<?php
$title = 'Вход';
require_once __DIR__ . '/includes/header.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (isset($USERS[$login]) && $USERS[$login]['password'] === $password) {
        $_SESSION['user'] = [
            'login' => $login,
            'role' => $USERS[$login]['role'],
            'name' => $USERS[$login]['name']
        ];
        header('Location: dashboard.php');
        exit;
    }

    $error = 'Неверный логин или пароль.';
}
?>

<section class="container page narrow">
    <h1>Вход в личный кабинет</h1>

    <?php if ($error !== ''): ?>
        <div class="alert alert-error"><?= h($error) ?></div>
    <?php endif; ?>

    <form class="form" method="post" action="login.php">
        <label>
            Логин
            <input type="text" name="login" placeholder="user">
        </label>

        <label>
            Пароль
            <input type="password" name="password" placeholder="user123">
        </label>

        <button class="button" type="submit">Войти</button>
    </form>

    <div class="test-users">
        <h2>Тестовые учетные записи</h2>
        <p>Гражданин: user / user123</p>
        <p>Сотрудник: staff / staff123</p>
        <p>Администратор: admin / admin123</p>
    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
