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

// Данные для подключения
$host = 'localhost';            // имя хоста
$user = 'root';                 // имя пользователя
$pass = 'root';                 // пароль
$name = 'db_organization';      // имя базы данных


// Подключение
$link = mysqli_connect($host, $user, $pass, $name);

// Отправки формы
if (!empty($_POST['add_user'])) {
    // Внутри условия получим наши данные в переменные
    $user_name = $_POST['name'];
    $user_age = $_POST['age'];
    $user_salary = $_POST['salary'];

    // Сформируем запрос на вставку данных
    $query = "INSERT INTO example_users SET user_name='$user_name', user_age='$user_age', user_salary='$user_salary'";
    echo $query;

    // Выполним этот запрос
    mysqli_query($link, $query) or die(mysqli_error($link));
}

?>

<a href="index1.php">Назад</a>

<br>
<br>

<h2>Добавить пользователя</h2>
<form action="" method="POST">
    <label>
        <input name="name" placeholder="Имя пользователя" value="<?= $user_name ?? '' ?>">
    </label>
    <label>
        <input name="age" placeholder="Возраст пользователя" value="<?= $user_age ?? '' ?>">
    </label>
    <label>
        <input name="salary" placeholder="ЗП пользователя" value="<?= $user_salary ?? '' ?>">
    </label>
    <input type="submit" name="add_user" value="Добавить пользователя">
</form>

<br>
<br>
