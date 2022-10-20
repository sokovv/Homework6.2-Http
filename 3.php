<?php

session_start();

echo 'Это третья страница<br/>';

$_SESSION['count'] = isset($_SESSION['count']) ? ++$_SESSION['count'] : 0;

echo 'Количество открытий страницы:' . $_SESSION['count'];

$count = $_SESSION['count'];

if ($count % 3 === 0 && $count !== 0) {
    header('Location: 4.php');
}
// Для сессий
//echo ' < pre>';
//print_r($_SESSION);
//echo ' < pre>';

// Для куков
//echo ' < pre>';
//print_r($_COOKIE);
//echo ' < pre>';

// Для удаления сессий
//unset($_SESSION['param_one']);
//session_destroy();