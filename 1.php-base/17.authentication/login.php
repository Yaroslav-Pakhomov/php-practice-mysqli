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

$_SESSION['show_form'] = TRUE;
$_SESSION['auth'] = FALSE;

if (!empty($_SESSION['flash_success'])) {
    echo $_SESSION['flash_success'];
    unset($_SESSION['flash_success']);
}


if (isset($_POST['enter'])) {

    if (!empty($_POST['login']) && !empty($_POST['password'])) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        // получаем юзера по логину
        $query = 'SELECT *, accounts_statuses.name as accounts_statuses_name FROM accounts LEFT JOIN accounts_statuses ON accounts.status_id=accounts_statuses.id WHERE login="' . $login . '"';

        $result = mysqli_query($link, $query);
        $user = mysqli_fetch_assoc($result);

        if (!empty($user)) {
            // соленый пароль из БД
            $hash = $user['password'];

            // Проверяем соответствие хеша из базы введенному паролю
            if (password_verify($password, $hash)) {
                $_SESSION = [];

                // авторизуем
                $_SESSION['auth'] = TRUE;
                $_SESSION['id'] = $user['id'];
                $_SESSION['login'] = $user['login'];
                $_SESSION['status'] = $user['accounts_statuses_name'];
                $_SESSION['flash_success'] = 'Прошёл авторизацию.';

                // Скрытие формы
                // $_SESSION['show_form_form'] = FALSE;

                // Редирект
                header('Location: index1.php');
            } else {
                $_SESSION['flash_success'] = 'Введенный логин или пароль вбиты не правильно.';
                header('Location: login.php');
            }

        }
    } else {
        $_SESSION['flash_success'] = 'Введите логин и/или пароль.';
        header('Location: login.php');
    }
}

echo '<br>';
echo '<br>';

echo basename(__FILE__);

?>


<a href="index1.php">index1.php</a>
<br>
<br>


<?php if ($_SESSION['show_form']) : ?>
    <form action="" method="POST">
        <label>
            <input type="text" name="login" placeholder="Логин">
        </label>
        <label>
            <input type="password" name="password" placeholder="Пароль">
        </label>
        <input type="submit" name="enter" value="Войти">
    </form>
<?php endif; ?>

<br>
<br>
<br>
<br>
<br>
<br>
