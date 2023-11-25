<?php

declare(strict_types=1);

// var_dump($_GET);     // массив для method="GET"
// var_dump($_POST);    // массив для method="POST"
//var_dump($_REQUEST); // массив для method="POST" и "GET"

if (isset($_GET['get'])) {
    echo '<br><br><br>';
    echo $_GET['test1'] . ' ' . $_GET['test1'] . ' - получение данных методом GET. <br><br>';
}

if (isset($_POST['post'])) {
    echo '<br><br><br>';
    echo $_POST['name'] . ' ' . $_POST['age'] . ' ' . $_POST['salary'] . ' - получение данных методом POST. <br><br>';
}

if (isset($_POST['summa'])) {
    echo '<br><br><br>';
    echo $_POST['number1'] + $_POST['number2'] + $_POST['number3'] . ' - сумма чисел. <br><br>';
}

if (isset($_POST['send_password'])) {
    echo '<br><br><br>';
    $pass = '12345';
    if ($_POST['pass'] !== $pass) {
        echo 'Введите правильный пароль.';
    } else {
        echo 'Пароль введён верно.';
    }
}

if (isset($_POST['birth'])) {
    $day = (int)$_POST['day'];
    $month = (int)$_POST['month'];
    $year = (int)$_POST['year'];
    $timestampBirth = strtotime($day . '-' . $month . '-' . $year);

    $week = ['вс', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб'];
    echo 'День недели в который Вы родились: ' . $week[date('w', $timestampBirth)];
}

