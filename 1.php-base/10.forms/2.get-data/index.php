<?php

declare(strict_types=1);
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
    <input name="get" type="submit">
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
    <input name="post" type="submit">
</form>

<form action="result.php" method="POST">
    Введите числа: <br>
    <label> Число 1
        <input name="number1">
    </label>
    <label> Число 2
        <input name="number2">
    </label>
    <label> Число 3
        <input name="number3">
    </label>
    <input name="summa" type="submit">
</form>

<form action="result.php" method="POST">
    Введите пароль: <br>
    <label>
        <input type="password" name="pass">
    </label>
    <input name="send_password" type="submit">
</form>

<form action="result.php" method="POST">
    Введите дату рождение: <br>
    <label> День
        <input name="day">
    </label>
    <label> Месяц
        <input name="month">
    </label>
    <label> Год
        <input name="year">
    </label>
    <input name="birth" type="submit">
</form>
