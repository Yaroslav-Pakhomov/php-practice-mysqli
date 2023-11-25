<?php

declare(strict_types=1);

require_once('result.php');
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');


?>
<form action="result.php" method="POST">
    Основные поля формы
    <br>
    <br>
    <label for="name"></label>
    <input type="text" name="name" id="name"
           value="<?= !empty($_POST['name']) ? $_POST['name'] : 'Введите имя' ?>"
    >
    <br>
    <br>
    <label for="age"></label>
    <input type="text" name="age" id="age"
           value="<?= !empty($_POST['age']) ? $_POST['age'] : 'Введите возраст' ?>"
    >
    <br>

    <br>
    <label for="notice"></label>
    <input type="checkbox" name="notice" id="notice"> Отправлять уведомления?
    <br>

    <br>
    Ваш пол ?
    <input type="hidden" name="gender" id="gender0" value="0">
    <label for="gender1"></label>
    <input type="radio" name="gender" id="gender1" value="1"
        <?= (!empty($_POST['gender']) && (int)$_POST['gender'] === 1) ? 'checked' : '' ?>
    > Муж.
    <label for="gender2"></label>
    <input type="radio" name="gender" id="gender2" value="2"
        <?= (!empty($_POST['gender']) && (int)$_POST['gender'] === 2) ? 'checked' : '' ?>
    > Жен.
    <br>

    <br>
    Выберите язык.
    <label for="language"></label>
    <select name="language" id="language">
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
    </select>
    <br>

    <br>
    <label for="description"></label>
    <textarea name="description" id="description" cols="30" rows="10">
            <?= !empty($_POST['description']) ? $_POST['description'] : 'Заполните описание' ?>
        </textarea>
    <br>

    <br>
    <input type="submit" name="send-form1" value="Поехали!" style="background: #0f0;">
</form>


<?php
echo "<br>";
echo "<br>";
echo "<br>";
// Исчезновение, обработка формы в одном файле
if (empty($_GET['send-form2'])) {
    ?>
    <form action="" method="GET">
        Исчезающая форма
        <br>
        <br>
        <label> Число 1:
            <input name="test1">
        </label>
        <label> Число 2:
            <input name="test2">
        </label>
        <input name="send-form2" type="submit" value="Сложить" style="background: #0f0;">
    </form>
    <?php
} else {
    echo $_GET['test1'] + $_GET['test2'];
}

// GET-запросы - ?par1=1&par2=2 добавьте в конец адресной строки и нажмите энтер.
// Итоговый GET-запрос - ?par1=1&par2=2&number=5&number1=13&number2=202&auth=1&arr=2
// GET-запросы в ссылках
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br>";
echo "<br>";
echo "<br>";
foreach ($arr as $link) {
    echo '<a href="?arr-link=' . $link . '">' . strtoupper($link) . '</a><br>';
}
echo "<br>";
if (!empty($_GET['arr-link'])) {
    echo $_GET['arr-link'];
}
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
if (isset($_POST['degrees']) && is_numeric($_POST['celsius'])) {
    $celsius = $_POST['celsius'];
    $fahrenheit = $celsius * 1.8 + 32;
}
?>
<form action="" method="POST">
    Перевод Цельсия в Фаренгейты
    <br>
    <br>
    <label for="celsius"></label>
    <input type="text" id="celsius" name="celsius" placeholder="Введите значение"
           value="<?= (!empty($celsius)) ? $celsius : '' ?>"
    > градусы в Цельсиях
    <input type="submit" name="degrees" value="" style="background: url('https://allcalc.ru/sites/all/themes/flat/images/change1.png') 0 0 no-repeat; background-size: cover; width: 33px;
         height: 29px; margin: 0 30px; ">
    <label for="fahrenheit"></label>
    <input type="text" id="fahrenheit" name="fahrenheit" placeholder="Вычисленное значение"
           value="<?= (!empty($fahrenheit)) ? $fahrenheit : '' ?>"
    > градусы в Фаренгейтах
</form>
<br>
<br>
<br>


<?php
if (isset($_POST['factorial']) && is_int((int)$_POST['number_factorial']) && $_POST['number_factorial'] >= 0) {
    $number_factorial = (int)$_POST['number_factorial'];
    if ($number_factorial === 0) {
        echo 'Факториал 0 равен: 1.';
    } else {
        $factorial = array_product(range(1, $number_factorial));
        echo 'Факториал ' . $number_factorial . ' равен: ' . $factorial . '.';
    }
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    Вычислите факториал числа
    <br>
    <br>
    <label for="number_factorial"></label>
    <input type="text" id="number_factorial" name="number_factorial" placeholder="Введите число"
           value="<?= (!empty($number_factorial)) ? $number_factorial : '' ?>"
    >
    <input type="submit" name="factorial" value="Вычислить" style="background: #0f0;">
    <br>
</form>
<br>
<br>
<br>


<?php
if (isset($_POST['divisors']) && is_int((int)$_POST['number_divisors']) && $_POST['number_divisors'] > 0) {
    $number_divisors = (int)$_POST['number_divisors'];
    $arr_number_divisors = range(2, ($number_divisors - 1));
    $arr_divisors = [];
    foreach ($arr_number_divisors as $divisors) {
        if ($number_divisors % $divisors === 0) {
            $arr_divisors[] = $divisors;
        }
    }

    echo 'Делители числа ' . $number_divisors . ' - ' . implode(', ', $arr_divisors);
    echo "<br>";
    echo "<br>";
}

?>
<form action="" method="POST">
    Найдите делители числа
    <br>
    <br>
    <label for="number_divisors"></label>
    <input type="text" id="number_divisors" name="number_divisors" placeholder="Введите число"
           value="<?= (!empty($number)) ? $number : '' ?>"
    >
    <input type="submit" name="divisors" value="Вычислить" style="background: #0f0;">
    <br>
</form>
<br>
<br>
<br>


<?php
if (isset($_POST['two_divisors']) && is_int((int)$_POST['number_divisors_1']) && $_POST['number_divisors_1'] > 0 && is_int((int)$_POST['number_divisors_2']) && $_POST['number_divisors_2'] > 0) {
    $number_divisors_1 = (int)$_POST['number_divisors_1'];
    $number_divisors_2 = (int)$_POST['number_divisors_2'];
    $arr_number_divisors = array_merge(range(2, ($number_divisors_1 - 1)), range(2, ($number_divisors_2 - 1)));
    $arr_divisors = [];
    foreach ($arr_number_divisors as $divisors) {
        if ($number_divisors_1 % $divisors === 0 && $number_divisors_2 % $divisors === 0) {
            $arr_divisors[] = $divisors;
        }
    }
    $arr_divisors = array_unique($arr_divisors);

    echo 'Делители чисел ' . $number_divisors_1 . ' и ' . $number_divisors_2 . ' - ' . implode(', ', $arr_divisors);

    echo "<br>";
    echo "<br>";
}

?>
<form action="" method="POST">
    Найдите общие делители у двух числа
    <br>
    <br>
    <label for="number_divisors_1"></label>
    <input type="text" id="number_divisors_1" name="number_divisors_1" placeholder="Введите число"
           value="<?= (!empty($number_divisors_1)) ? $number_divisors_1 : '' ?>"
    >
    <label for="number_divisors_2"></label>
    <input type="text" id="number_divisors_2" name="number_divisors_2" placeholder="Введите число"
           value="<?= (!empty($number_divisors_2)) ? $number_divisors_2 : '' ?>"
    >
    <input type="submit" name="two_divisors" value="Вычислить" style="background: #0f0;">
    <br>
</form>
<br>
<br>
<br>

<?php
if (isset($_POST['real_numbers'])) {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];
    $D = getDiscriminant($a, $b, $c);
    if (!is_string($D)) {
        if ($D < 0) {
            echo 'У уравнения нет действительных корней';
        } else {
            $x_1 = (-$b + sqrt($D)) / 2 * $a;
            $x_2 = (-$b - sqrt($D)) / 2 * $a;
        }
    } else {
        echo $D;
    }
    if (!empty($x_1) && !empty($x_2)) {
        echo 'Корни уравнения равны: x1 = ' . $x_1 . ', x2 = ' . $x_2 . '.';
    }
    echo "<br>";
    echo "<br>";
}
function getDiscriminant($a, $b, $c): int|string {
    if ($a === 0) {
        return 'Уравнение не квадратное.';
    }

    return $b ** 2 - 4 * $a * $c;
}

?>
<form action="" method="POST">
    Найдите корни квадратного уравнения
    <br>
    <br>
    <label for="a"></label>
    <input type="text" id="a" name="a" placeholder="Введите число a"
           value="<?= (!empty($a)) ? $a : '' ?>"
    >
    <label for="b"></label>
    <input type="text" id="b" name="b" placeholder="Введите число b"
           value="<?= (!empty($b)) ? $b : '' ?>"
    >
    <label for="c"></label>
    <input type="text" id="c" name="c" placeholder="Введите число c"
           value="<?= (!empty($c)) ? $c : '' ?>"
    >
    <input type="submit" name="real_numbers" value="Вычислить" style="background: #0f0;">
    <br>
</form>
<br>
<br>
<br>
<?php
if (isset($_POST['pythagorean_triple'])) {
    $number_1 = (int)$_POST['number_1'];
    $number_2 = (int)$_POST['number_2'];
    $number_3 = (int)$_POST['number_3'];
    if (($number_3 ** 2) === ($number_1 ** 2 + $number_2 ** 2)) {
        echo 'Числа являются тройкой Пифагора.<br>';
        echo 'Квадрат третьего числа ' . $number_3 . ' равен сумме первого ' . $number_1 . ' и второго ' . $number_2 . ' чисел: ' . $number_3 ** 2 . ' = ' . $number_1 ** 2 . ' + ' . $number_2 ** 2 . ' .';
    } else {
        echo 'Числа не являются тройкой Пифагора.<br>';
        echo 'Квадрат третьего числа ' . $number_3 . ' не равен сумме первого ' . $number_1 . ' и второго ' . $number_2 . ' чисел: ' . $number_3 ** 2 . ' != ' . $number_1 ** 2 . ' + ' . $number_2 ** 2 . ' .';
    }
    echo "<br>";
    echo "<br>";
}


?>
<form action="" method="POST">
    Тройка Пифагора
    <br>
    <br>
    <label for="number_1"></label>
    <input type="text" id="number_1" name="number_1" placeholder="Введите первое число"
           value="<?= (!empty($number_1)) ? $number_1 : '' ?>"
    >
    <label for="number_2"></label>
    <input type="text" id="number_2" name="number_2" placeholder="Введите второе число"
           value="<?= (!empty($number_2)) ? $number_2 : '' ?>"
    >
    <label for="number_3"></label>
    <input type="text" id="number_3" name="number_3" placeholder="Введите третье число"
           value="<?= (!empty($number_3)) ? $number_3 : '' ?>"
    >
    <input type="submit" name="pythagorean_triple" value="Вычислить" style="background: #0f0;">
    <br>
</form>
<br>
<br>
<br>


<!--explode(разделитель, строка)-->

