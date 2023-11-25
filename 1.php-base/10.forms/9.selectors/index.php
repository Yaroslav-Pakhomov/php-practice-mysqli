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

if (isset($_POST['select1'])) {
    echo $_POST['test'];
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label>
        <select name="test">
            <option>item1</option>
            <option>item2</option>
            <option>item3</option>
        </select>
    </label>
    <input type="submit" name="select1">
</form>
<br>
<br>
<br>
<?php
if (isset($_POST['country-select'])) {
    echo $_POST['country'];
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label for="countries"></label>
    <select name="country" id="countries">
        <option>Россия</option>
        <option>Русь</option>
        <option>Тартария</option>
        <option>Гиперборея</option>
    </select>

    <input type="submit" name="country-select" value="Установить страну">
</form>
<br>
<br>
<br>
<!--Атрибут value-->
<?php
if (isset($_POST['select2'])) {
    echo (int)$_POST['test'];
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label>
        <select name="test">
            <option value="1"
                <?= (!empty($_POST['test']) && (int)$_POST['test'] === 1) ? 'selected' : '' ?>
            >item1
            </option>
            <option value="2"
                <?= (!empty($_POST['test']) && (int)$_POST['test'] === 2) ? 'selected' : '' ?>
            >item2
            </option>
            <option value="3"
                <?= (!empty($_POST['test']) && (int)$_POST['test'] === 3) ? 'selected' : '' ?>
            >item3
            </option>
        </select>
    </label>
    <input type="submit" name="select2">
</form>
<br>
<br>
<br>
<?php
if (isset($_POST['select-language'])) {
    echo (int)$_POST['language'];
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label for="languages"></label>
    <select name="language" id="languages">
        <option value="1"
            <?= (!empty($_POST['language']) && (int)$_POST['language'] === 1) ? 'selected' : '' ?>
        >Русский
        </option>
        <option value="2"
            <?= (!empty($_POST['language']) && (int)$_POST['language'] === 2) ? 'selected' : '' ?>
        >Славянский
        </option>
        <option value="3"
            <?= (!empty($_POST['language']) && (int)$_POST['language'] === 3) ? 'selected' : '' ?>
        >Арийский
        </option>
        <option value="4"
            <?= (!empty($_POST['language']) && (int)$_POST['language'] === 4) ? 'selected' : '' ?>
        >Древне-славянский
        </option>
    </select>
    <input type="submit" name="select-language" value="Установить язык">
</form>
<br>
<br>
<br>
<?php
if (isset($_GET['select3'])) {
    echo (int)$_GET['test'];
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="GET">
    <label for="tests"></label>
    <select name="test" id="tests">
        <option value="1"
            <?php
            if (!empty($_GET['test']) && $_GET['test'] === '1') {
                echo 'selected';
            }
            ?>
        >item1
        </option>
        <option value="2"
            <?php
            if (!empty($_GET['test']) && $_GET['test'] === '2') {
                echo 'selected';
            }
            ?>
        >item2
        </option>
        <option value="3"
            <?php
            if (!empty($_GET['test']) && $_GET['test'] === '3') {
                echo 'selected';
            }
            ?>
        >item3
        </option>
    </select>
    <input type="submit" name="select3">
</form>
<?php

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
