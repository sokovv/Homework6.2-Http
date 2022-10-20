<?php

header('Content-Type: text/plain');
header('Content-Disposition:attachment; filename="downloaded.txt"');

$c = $_GET['text'];

echo $c;