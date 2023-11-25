<?php

declare(strict_types = 1);

// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

if (isset($_GET['test'])) {
    echo $_GET['test1'] . ' ' . $_GET['test2'];
}
echo "<br>";
echo "<br>";
if (isset($_POST['data-user'])) {
    echo 'ФИО: ' . $_POST['name'] . ';<br>  Возраст: ' . $_POST['age'] . ';<br>  Зарплата: ' . $_POST['salary'];
}
echo "<br>";
echo "<br>";
echo "<br>";

?>

<form action="" method="GET">
    <label> Test 1:
        <input name="test1">
    </label>
    <label> Test 2:
        <input name="test2">
    </label>
    <input name="test" type="submit">
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<form action="" method="POST">
    Данные сотрудника:
    <br>
    <br>
    <br>
    <label> Имя:
        <input name="name">
    </label>
    <label> Возраст:
        <input name="age">
    </label>
    <label> Зарплата:
        <input name="salary">
    </label>
    <input name="data-user" type="submit">
</form>

