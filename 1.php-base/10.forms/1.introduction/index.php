<?php

declare(strict_types=1);

require_once('result.php');
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');


echo "<br>";
echo "<br>";
echo "<br>";

?>

<form action="result.php" method="GET">
    <label>
        <input name="test1">
    </label>
    <label>
        <input name="test2">
    </label>
    <input type="submit">
</form>


<form action="result.php" method="POST">
    <label>
        <input name="name">
    </label>
    <label>
        <input name="age">
    </label>
    <label>
        <input name="salary">
    </label>
    <input type="submit">
</form>
