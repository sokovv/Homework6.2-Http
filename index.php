<?php
declare(strict_types=1);

//phpinfo();
//http_response_code(404);
//var_dump($_SERVER);
//header($_SERVER["SERVER_PROTOCOL"].' 404 Not Found');

$text = 'Я переданный параметр text в GET запросе';

echo '<ul> Список страниц';
echo '<li> <a href="1.php">Первая страница </a></li>';
echo '<li> <a href="2.php/?text=' . $text . '">Вторая страница </a></li>';
echo '<li> <a href="3.php">Третья страница </a></li>';
echo '<li> <a href="4.php">Четвертая страница </a></li>';
echo '</ul>';

// Для куков
//$name ='TestCookie';
//$value ='value_of_cookie';
//setcookie($name, $value);
//setcookie($name, '',time()-3600);
