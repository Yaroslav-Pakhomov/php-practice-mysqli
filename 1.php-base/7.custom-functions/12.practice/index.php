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

function deterDivs($number): int {
    $summa = 0;
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $summa += $i;
        }
    }

    return $summa;
}


function friendShip($number1, $number2): string {
    $summaDivs1 = deterDivs($number1);
    echo $summaDivs1 . '<br>';
    $summaDivs2 = deterDivs($number2);
    echo $summaDivs2 . '<br>';

    return ($summaDivs1 === $summaDivs2) ? 'Дружественные числа' : 'Не дружественные числа';
}

echo friendShip(35, 27);
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


echo "<br>";
echo "<br>";
echo "<br>";

?>
