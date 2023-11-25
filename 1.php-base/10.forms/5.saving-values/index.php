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

<form action="" method="GET">
    <label>
        <input name="test" value="<?= $_GET['test'] ?? '' ?>">
    </label>
    <input type="submit">
</form>
<br><br><br><br>


<?php
if (isset($_POST['coordinates'])) {
    echo 'Ваши координаты: <br><br>';
    echo 'Страна: ' . $_POST['country'] . '<br> Город: ' . $_POST['city'];
}
?>
<br><br>
<form action="" method="POST">
    Форма для ввода координат
    <br>
    <br>
    <label> Введите город
        <input name="city" type="text" value="<?= !empty($_POST['city']) ? $_POST['city'] : 'Город' ?>">
    </label>
    <br>
    <br>
    <label> Введите страну
        <input name="country" type="text" value="<?= $_POST['country'] ?? 'Страна' ?>">
    </label>
    <br>
    <br>
    <input name="coordinates" type="submit" value="Поехали!!!">
</form>
<br><br><br><br>


<?php
if (isset($_POST['date1'])) {
    $year = (int)$_POST['year'];
    if (isLeap($year) === 1) {
        echo 'Вы ввели високосный год: ' . $year . '.';
    } else {
        echo 'Введённый год: ' . $year . '.';
    }
}
//Если год високосный, то возвращает 1 иначе 0
function isLeap(int $year): int {
    return (int)date("L", mktime(0, 0, 0, 7, 7, $year));
}

?>
<br><br>
<form action="" method="POST">
    Форма для ввода года:
    <br>
    <br>
    <label> Введите год:
        <input name="year" type="text" value="<?= empty($_POST['year']) ? date('Y') : $_POST['year'] ?>">
    </label>
    <input name="date1" type="submit" value="Ввести">
</form>
<br><br><br><br>


<?php
if (isset($_POST['date'])) {
    $day = (int)$_POST['day'];
    $month = (int)$_POST['month'];
    $year = (int)$_POST['year'];
    $difference_days = numberDays($day, $month, $year);

    echo 'Количество дней до Нового 2023 Года: ' . $difference_days;
}

// function numberDays() {
//     // Сколько дней осталось до Нового Года.
//     сколькоДнейОсталосьДоНовогоГода();
// }

/**
 * Сколько дней осталось до Нового Года.
 * @param int $day
 * @param int $month
 * @param int $year
 * @return float
 */
function numberDays(int $day, int $month, int $year): float {
    $new_year_date = strtotime('31.12.2022');
    $current_time = strtotime($day . '.' . $month . '.' . $year);
    $difference_seconds = $new_year_date - $current_time;
    $difference_minutes = $difference_seconds / 60;
    $difference_hours = $difference_minutes / 60;
    return ceil($difference_hours / 24);
}

?>
<br><br>
<form action="" method="POST">
    Форма для ввода даты:
    <br>
    <br>
    <label> Введите день:
        <input name="day" type="text" value="<?= empty($_POST['day']) ? date('d') : $_POST['day'] ?>">
    </label>
    <br>
    <br>
    <label> Введите месяц:
        <input name="month" type="text" value="<?= empty($_POST['month']) ? date('n') : $_POST['month'] ?>">
    </label>
    <br>
    <br>
    <label> Введите год:
        <input name="year" type="text" value="<?= empty($_POST['year']) ? date('Y') : $_POST['year'] ?>">
    </label>
    <br>
    <br>
    <input name="date" type="submit" value="Ввести">
</form>
<br><br><br><br>




