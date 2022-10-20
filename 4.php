<?php

session_start();

echo 'Это четвертая страница<br/>';

echo 'Количество открытий  третьей страницы:' . $_SESSION['count'];