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

// Давайте напишем код, который будет проверять число на то, простое оно или нет. Простое число - это число, которое не делится ни на одно другое число (кроме как на 1 и на само себя - на это делятся все числа).

// Самый простой способ проверить число на простоту - перебрать в цикле все числа от 2 до самого числа и в процессе перебора проверять, делится ли наше число хотя бы на одно из перебираемых чисел. Если ни на одно из этих чисел наше число не поделится - оно простое, а если хотя бы на одно поделится - оно составное.


$num = 31; // некоторое число для проверки на "простоту"
$flag = true;// начальное значение флага
// цикл от 2 до нашего числа (не включая его)
for ($i = 2; $i < $num; $i++) {
    // делится ли наше число на счетчик цикла
    if ($num % $i === 0) {
        // Если $num хотя бы один раз поделится на $i, то число не простое. В таком случае мы должны установить значение флага в false
        $flag = false; // если хотя бы один раз поделилось
        break; // выйдем из цикла
    }
}

var_dump($flag);// выведем значение флага
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