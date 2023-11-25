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

if (isset($_GET['id'])) {

    // Пусть id юзера, которого мы хотим просмотреть, передается через GET параметр с именем id. Получим его в переменную
    $id = $_GET['id'];

    // echo $id;

    // Сформируем запрос на получение этого юзера
    $query = "SELECT * FROM example_users WHERE id=$id";
    // echo $query;


    // Выполним запрос
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    // Запишем данные юзера в переменную
    $user = mysqli_fetch_assoc($result);
}

// Отправки формы
if (!empty($_POST['edit_user'])) {
    // Внутри условия получим наши данные в переменные
    $user_name = $_POST['name'];
    $user_age = $_POST['age'];
    $user_salary = $_POST['salary'];

    // Пусть id юзера, которого мы хотим просмотреть, передается через GET параметр с именем id. Получим его в переменную
    $id = $_GET['id'];

    // Сформируем запрос на вставку данных
    $query = "UPDATE example_users SET user_name='$user_name', user_age='$user_age', user_salary='$user_salary' WHERE id=$id";
    // echo $query;

    // echo '<br>';
    // echo '<br>';

    // Выполним этот запрос
    mysqli_query($link, $query) or die(mysqli_error($link));

    echo $user_name . ' успешно изменен!';

    echo '<br>';
    echo '<br>';
}

?>

<a href="index1.php">Назад</a>

<br>
<br>

<h2>Добавить пользователя</h2>
<form action="" method="POST">
    <label>
        <input name="name" placeholder="Имя пользователя" value="<?= $user_name ?? $user['user_name'] ?>">
    </label>
    <label>
        <input name="age" placeholder="Возраст пользователя" value="<?= $user_age ?? $user['user_age'] ?>">
    </label>
    <label>
        <input name="salary" placeholder="ЗП пользователя"
               value="<?= $user_salary ?? round((float)$user['user_salary'], 2) ?>">
    </label>
    <input type="submit" name="edit_user" value="Редактировать пользователя">
</form>

<br>
<br>
