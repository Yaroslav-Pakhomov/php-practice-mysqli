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

<?php
if (empty($_GET)) {
    ?>
    <form action="" method="GET">
        <label> Тест 1:
            <input name="test1">
        </label>
        <label> Тест 1:
            <input name="test2">
        </label>
        <input name="test" type="submit">
    </form>
    <?php
} else {
    echo $_GET['test1'] + $_GET['test2'];
}
?>
<br>
<br>
<br>
<br>
<?php
if (isset($_POST['user'])) {
    echo 'Привет ' . $_POST['name'] . '! <br> Хорошего дня!!!';
} else {
    ?>
    <form action="" method="POST">
        Форма для имени.
        <br>
        <br>
        <label> Введите Ваше имя:
            <input name="name" type="text">
        </label>
        <input name="user" type="submit" value="Поехали!!!">
    </form>
    <?php
}
?>

