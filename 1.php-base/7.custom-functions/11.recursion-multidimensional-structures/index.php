<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

function func($arr): void {
    foreach ($arr as $elem) {
        if (is_array($elem)) {
            func($elem);
        } else {
            echo $elem;
        }
    }
}

func([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]);
echo "<br>";
echo "<br>";
echo "<br>";

/**
 * @param $arr
 * @return void
 */
function recursionArray($arr): void {
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArray($value);
        } else {
            echo $value . '<br>';
        }
    }
}

$arr = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
recursionArray($arr);
echo "<br>";
echo "<br>";

// Сумма элементов массива
function func1($arr) {
    $sum = 0;

    foreach ($arr as $elem) {
        if (is_array($elem)) {
            $sum += func1($elem);
        } else {
            $sum += $elem;
        }
    }

    return $sum;
}


var_dump(func1([1, [2, 7, 8], [3, 4, [5, [6, 7]]]]));
echo "<br>";
echo "<br>";
echo "<br>";

$summa = 0;
function recursionArraySumma(array $arr) {
    global $summa;
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArraySumma($value);
        } else {
            $summa += $value;
        }
    }
    return $summa;
}

$arr1 = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
echo recursionArraySumma($arr1);
echo "<br>";
echo "<br>";
echo "<br>";

$string = '';
function recursionArrayString(array $arr): string {
    global $string;
    foreach ($arr as $value) {
        if (is_array($value)) {
            recursionArrayString($value);
        } else {
            $string .= $value;
        }
    }
    return $string;
}

$arr2 = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
echo recursionArrayString($arr2);
echo "<br>";
echo "<br>";
echo "<br>";

function func2($arr) {
    foreach ($arr as $i => $iValue) {
        if (is_array($iValue)) {
            $arr[$i] = func2($iValue);
        } else {
            $arr[$i] .= '!';
        }
    }

    return $arr;
}

var_dump(func2([1, [2, 7, 8], [3, 4, [5, 6]]]));
echo "<br>";
echo "<br>";

function recursionDegree($arr) {
    foreach ($arr as $i => $value) {
        if (is_array($value)) {
            $arr[$i] = recursionDegree($value);
        } else {
            $arr[$i] = $value ** 2;
        }
    }

    return $arr;
}

$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
echo '<pre>';
print_r(recursionDegree($arr));
echo '</pre>';
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
