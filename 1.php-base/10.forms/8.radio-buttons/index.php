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

if (isset($_POST['radio'])) {
    var_dump($_POST['radio']);
}
echo "<br>";
echo "<br>";
echo "<br>";
?>
<!--При работе с радио возникают та же проблема, что и в чекбоксах. Для решения этой проблемы давайте добавим скрытый инпут:-->
<form action="" method="POST">
    <input type="hidden" name="radio" value="0">
    <label>
        <input type="radio" name="radio" value="1">
    </label>
    <label>
        <input type="radio" name="radio" value="2">
    </label>
    <label>
        <input type="radio" name="radio" value="3">
    </label>
    <input type="submit">
</form>
<!--Можно также не вводить скрытый инпут, а сделать один из переключателей отмеченным по умолчанию:-->
<form action="" method="POST">
    <label>
        <input type="radio" name="radio" value="1" checked>
    </label>
    <label>
        <input type="radio" name="radio" value="2">
    </label>
    <label>
        <input type="radio" name="radio" value="3">
    </label>
    <input type="submit">
</form>
<br>
<br>
<!--Сохранение после отправки-->
<form action="" method="POST">
    Ваш пол:
    <input type="hidden" name="sex" value="0">
    <label>
        <input
                type="radio"
                name="sex"
                value="1"
            <?= (!empty($_POST['sex']) && (int)$_POST['sex'] === 1) ? 'checked' : '' ?>
        > М
    </label>
    <label>
        <input
                type="radio"
                name="sex"
                value="2"
            <?= (!empty($_POST['sex']) && (int)$_POST['sex'] === 2) ? 'checked' : '' ?>
        > Ж
    </label>
    <input type="submit" name="form-sex" value="Отправить">
</form>
<br>
<?php
if (isset($_POST['form-sex'])) {
    // var_dump($_POST);
    $sex = (int)$_POST['sex'];
    if ($sex === 0) {
        echo 'Вы не выбрали свой пол.';
    } elseif ($sex === 1) {
        echo 'Вы мужчина';
    } else {
        echo 'Вы женщина';
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
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>
