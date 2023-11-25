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

if (!empty($_POST)) { // если форма была отправлена
    if (isset($_POST['flag'])) { // если флажок отмечен
        echo 'отмечен';
    } else {
        echo 'не отмечен';
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label>
        <input type="checkbox" name="flag">
    </label>
    <label>
        <input name="text">
    </label>
    <input type="submit">
</form>
<br>
<br>
<br>

<form action="" method="POST">
    Форма для заполнения
    <br>
    <br>
    <label for=""> Вы готовы общаться?
        <input type="checkbox" name="ready">
    </label>
    <br>
    <br>
    <label for="">Введите Ваше Имя
        <input type="text" name="name">
    </label>
    <br>
    <br>
    <input type="submit" name="form-name" value="Поехали">
</form>
<?php
if (isset($_POST['form-name'])) {
    echo "<br>";
    echo "<br>";
    if (isset($_POST['ready'])) {
        echo 'Привет ' . $_POST['name'] . '!!!';
    } else {
        echo 'Прощай ' . $_POST['name'] . ' навсегда...';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!--!!!!!!!!!!!!!!!!! Нюансы-->

<!--Нас ждет проблема - если флажок не отмечен, то, так как в форме кроме чекбокса нет других элементов, в $_GET будет лежать пустой массив. Это значит, что в коде обработки формы мы не попадем в первый if, проверяющий отправку формы.-->
<!--Для решения проблемы используют специальный прием: создают скрытый инпут с таким же именем, как и у нашего чекбокса. При этом значением скрытого инпута ставят ноль, а чебокса - единицу:-->

<form action="" method="POST">
    Проверка совершенно летия:
    <br>
    <br>
    <input type="hidden" name="flag" value="0">
    <label> Исполнилось ли Вам 18 лет:
        <input
                type="checkbox"
                name="flag"
                value="1"
            <?= !empty($_POST['flag']) ? 'checked' : '' ?>
        > Да
    </label>
    <br>
    <br>
    <input type="submit" name="checkbox" value="Подтвердить">
</form>

<!--В таком случае получится следующее. Если чекбокс не отмечен, то на сервер отправится только значение скрытого инпута. Если же чекбокс отмечен, то на сервер отправятся оба значения с одним именем. Но, так как значение чекбокса будет вторым, то оно просто затрет первое.-->
<!--Итак, теперь наша чекбокс будет отправлять на сервер или ноль, или один-->

<?php
if (!empty($_POST['checkbox'])) {
    if ($_POST['flag'] === '1') {
        echo 'Порнуха!!!';
    } else {
        echo 'Нет порнухе!!!!';
    }
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!--Сохранение значения после отправки-->

<form action="" method="POST">
    <input type="hidden" name="flag" value="0">
    <label>
        <input
                type="checkbox"
                name="flag"
                value="1"
            <?= !empty($_POST['flag']) ? 'checked' : '' ?>
        >
    </label>
    <input type="submit">
</form>
<br>
<br>
<br>
<form action="" method="POST">
    <input type="hidden" name="flag1" value="0">
    <input type="hidden" name="flag2" value="0">
    <input type="hidden" name="flag3" value="0">
    <label>
        <input
                type="checkbox"
                name="flag1"
                value="1"
            <?= !empty($_POST['flag1']) ? 'checked' : '' ?>
        > Флаг 1
    </label>
    <label>
        <input
                type="checkbox"
                name="flag2"
                value="1"
            <?= !empty($_POST['flag2']) ? 'checked' : '' ?>
        > Флаг 2
    </label>
    <label>
        <input
                type="checkbox"
                name="flag3"
                value="1"
            <?= !empty($_POST['flag3']) ? 'checked' : '' ?>
        > Флаг 3
    </label>
    <input type="submit" name="flags" value="Отправить флаги">
</form>
<?php
if (isset($_POST['flags'])) {
    $flags = [];
    if ($_POST['flag1'] > 0) {
        $flags[] = 'Флаг1';
    }
    if ($_POST['flag2'] > 0) {
        $flags[] = 'Флаг2';
    }
    if ($_POST['flag3'] > 0) {
        $flags[] = 'Флаг3';
    }

    // Аналог if выше
    // $flags[] = ($_POST['flag2'] > 0)? 'Флаг2' : null;
    // $flags[] = ($_POST['flag3'] > 0)? 'Флаг3' : null;

    if (count($flags) > 0) {
        echo 'Выбраны следующие флаги: ' . implode(', ', $flags);
    } else {
        echo 'Флаги не выбраны.';
    }

}
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>
