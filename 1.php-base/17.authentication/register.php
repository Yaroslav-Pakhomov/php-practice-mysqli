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

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

echo basename(__FILE__);
echo '<br>';
echo '<br>';

// Генерация соли. Соль - это специальная случайная строка, которую нужно записывать в БД для каждого пользователя.
function generateSalt(): string {
    $salt = '';
    $saltLength = 8; // длина соли

    for ($i = 0; $i < $saltLength; $i++) {
        $salt .= chr(mt_rand(33, 126)); // символ из ASCII-table
    }

    return $salt;
}

// TODO: функция password_hash()

if (!empty($_SESSION['flash_success'])) {
    echo $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
}

// echo password_hash('12345', PASSWORD_DEFAULT);

if (isset($_POST['register'])) {

    // print_r ($_POST);
    // exit;
    // Получаемые данные
    $login = $_POST['login'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $time = time() + 2 * 60 * 60;
    $create_at = date('Y-m-d H:i:s', $time);
    // $birthday =  strtotime($_POST['birthday']);

    // Запись в сессию
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['confirm'] = $_POST['confirm'];
    $_SESSION['email'] = $_POST['email'];

    // Валидация
    // Пустые поля
    if (empty($login) || empty($password) || empty($confirm)) {
        $_SESSION['flash_success'] = 'Заполните все поля.';
        header('Location: register.php');
        exit;
    }

    // Логин длиной от 4 до 10 символов
    if (strlen($login) < 4 || strlen($login) > 10) {
        $_SESSION['flash_success'] = 'Логин должен быть длиной от 4 до 10 символов.';
        $_SESSION['error_login'] = 'Логин должен быть длиной от 4 до 10 символов.';
        header('Location: register.php');
        exit;
    }

    // Логин только латинские буквы, цифры и пробел
    if (!preg_match("/^[A-z0-9\s]+$/", $login)) {
        $_SESSION['flash_success'] = 'Логин должен содержать только латинские буквы и цифры, не должно быть пробелов.';
        $_SESSION['error_login'] = 'Логин должен содержать только латинские буквы и цифры, не должно быть пробелов.';
        header('Location: register.php');
        exit;
    }

    // Пароль длиной от 6 до 12 символов
    if (strlen($password) < 6 || strlen($password) > 10) {
        $_SESSION['flash_success'] = 'Пароль должен быть длиной от 6 до 12 символов.';
        $_SESSION['error_password'] = 'Пароль должен быть длиной от 6 до 12 символов.';
        header('Location: register.php');
        exit;
    }

    // Проверка подтверждения пароля
    if ($_POST['password'] !== $_POST['confirm']) {
        $_SESSION['flash_success'] = 'Пароли не совпадают.';
        $_SESSION['error_password'] = 'Пароли не совпадают.';
        header('Location: register.php');
        exit;
    }

    // Email длиной от 6 до 12 символов
    if (strlen($email) < 6 || strlen($email) > 50) {
        $_SESSION['flash_success'] = 'Email должен быть длиной от 6 до 50 символов.';
        $_SESSION['error_email'] = 'Email должен быть длиной от 6 до 50 символов.';
        header('Location: register.php');
        exit;
    }

    // Дата рождения - формат
    if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $birthday)) {
        $_SESSION['flash_success'] = 'Не верен формат даты.';
        $_SESSION['error_birthday'] = 'Не верен формат даты.';
        header('Location: register.php');
        exit;
    }

    // Проверка логина на занятость
    $query = 'SELECT * FROM accounts WHERE login="' . $login . '"';
    $user = mysqli_fetch_assoc(mysqli_query($link, $query));
    if (!empty($user)) {
        $_SESSION['auth'] = FALSE;
        $_SESSION['flash_success'] = 'Логин занят, придумайте другой.';
        $_SESSION['error_login'] = 'Логин занят, придумайте другой.';
        header('Location: register.php');
        exit;
    }

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = 'INSERT INTO accounts SET login="' . $login . '", password="' . $password . '", birthday="' . $birthday . '", email="' . $email . '", status_id=1, created_at="' . $create_at . '"';

    $result = mysqli_query($link, $query);

    if (!empty($result)) {
        $_SESSION = [];
        // Добавляем id пользователя в сессию, mysqli_insert_id - эта функция получает id последней вставленной в данном скрипте записи
        $id = mysqli_insert_id($link);

        // Пишем id в сессию
        $_SESSION['auth'] = TRUE;
        $_SESSION['id'] = $id;
        $_SESSION['login'] = $login;
        $_SESSION['status_id'] = 1;
        $_SESSION['flash_success'] = 'Прошёл авторизацию.';


        // Редирект
        header('Location: index1.php');
    }
}

echo '<br>';
echo '<br>';

echo basename(__FILE__);

?>

<br>
<br>

<a href="index1.php">index1.php</a>
<br>
<br>

<form action="" method="POST">
    <?php
    if (!empty($_SESSION['error_login'])) {
        echo $_SESSION['error_login'];
        unset($_SESSION['error_login']);
        echo '<br>';
    }
    ?>
    <label>
        <input type="text" name="login" placeholder="Логин" value="<?= $_SESSION['login'] ?? '' ?>">
    </label>
    <br>
    <br>
    <?php
    if (!empty($_SESSION['error_password'])) {
        echo $_SESSION['error_password'];
        unset($_SESSION['error_password']);
        echo '<br>';
    }
    ?>
    <label>
        <input type="password" name="password" placeholder="Пароль" value="<?= $_SESSION['password'] ?? '' ?>">
    </label>
    <label>
        <input type="password" name="confirm" placeholder="Повторите пароль" value="<?= $_SESSION['confirm'] ?? '' ?>">
    </label>
    <br>
    <br>
    <label for="">
        <?php
        if (!empty($_SESSION['error_birthday'])) {
            echo $_SESSION['error_birthday'];
            unset($_SESSION['error_birthday']);
            echo '<br>';
        }
        ?>
        Дата рождения:
        <input type="date" name="birthday" value="2010-07-22" min="1940-01-01" max="2018-12-31">
    </label>
    <br>
    <br>
    <?php
    if (!empty($_SESSION['error_email'])) {
        echo $_SESSION['error_email'];
        unset($_SESSION['error_email']);
        echo '<br>';
    }
    ?>
    <label>
        <input type="email" name="email" size="30" placeholder="Почта" value="<?= $_SESSION['email'] ?? '' ?>">
    </label>
    <br>
    <br>
    <input type="submit" name="register" value="Регистрация">
</form>
