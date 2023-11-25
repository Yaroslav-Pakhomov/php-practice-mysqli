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

session_start();


?>

    <br>
    <form action="" method="POST">
        Введите ФИО:
        <br>
        <br>
        <br>
        <label for="surname"></label>
        <input type="text" id="surname" name="surname" placeholder="Ваша фамилия">
        <br>
        <br>
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="Ваше имя">
        <br>
        <br>
        <label for="age"></label>
        <input type="text" id="age" name="age" placeholder="Ваш возраст">
        <br>
        <br>
        <input type="submit" name="data-user" value="Поехали!!!" style="background: #0f0; color: #000">
    </form>
    <br>
    <br>
    <br>
    <a href="test2.php">test 2</a>

<?php

if (isset($_POST['data-user'])) {
    $_SESSION['surname'] = $_POST['surname'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['age'] = $_POST['name'];
    echo 'Данные записаны.';
}

