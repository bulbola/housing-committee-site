<?php
require_once __DIR__ . '/includes/config.php';

$currentTheme = $_COOKIE['theme'] ?? 'default';
$newTheme = $currentTheme === 'accessible' ? 'default' : 'accessible';

setcookie('theme', $newTheme, time() + 60 * 60 * 24 * 30, '/');

$back = $_SERVER['HTTP_REFERER'] ?? 'index.php';
header('Location: ' . $back);
exit;
?>
