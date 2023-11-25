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

// пример анонимной функции:
$string = 'Привет, мир!';
// Обозначаете, что хотим использовать анонимную функцию и внутри нужно использовать переменную $string.
$func = static function () use (&$string) {
    // Что мы и делаем:
    $string .= ' ' . $string;
    echo $string;
};
//вызываем анонимную функцию:
$func();
echo "<br>";
echo "<br>";
echo "<br>";

$namePrinter = static function ($name) {
    echo sprintf("Куку %s\n", $name);
};
$namePrinter('Вася');
echo "<br>";
$namePrinter('Петр');
echo "<br>";
$namePrinter('Саша');
echo "<br>";
echo "<br>";

$names = ['alex', 'petr'];

function upperCase($name): string {
    return "Хай " . ucfirst($name);
}

print_r(array_map('upperCase', $names));
echo "<br>";
echo "<br>";
echo "<br>";

// новый вариант, который состоит всего из 5 строк
$names1 = ['alex', 'petr'];
print_r(array_map(static function ($name) {
    return "Хай " . ucfirst($name);
}, $names1));
// Результат точно такой же как и в примере выше.
echo "<br>";
echo "<br>";
echo "<br>";

// Создание Closure с анонимной функцией

// Рассмотрим пример:

// Объяснение

/**
 * Создан новый класс TestClass, который включает в себя один статистический метод doSomething() с двумя передаваемыми параметрами: $num, $closure. Второй параметр не обязательный.
 */
class TestClass
{
    /**
     * Логика doSomething() следующая:
     * - если $closure не является Closure, тогда мы возвращаем $num;
     * - если $closure является Closure, тогда мы вызываем саму $closure и передаем $num, чтобы тот, кто использует метод, мог воспользоваться числом (если потребуется). Далее проверяем, вернулась ли цифра (т.к. это то, что мы ожидаем), если все ок, тогда умножаем $num на $value, которое вернуло $closure;
     * - в ином случае возвращаем $num.
     */

    public static function doSomething($num, $closure = null): mixed {
        if (!$closure instanceof Closure) {
            return $num;
        }

        if (($value = $closure($num)) && is_int($value)) {
            return $value * $num;
        }

        return $num;
    }
}

$t = new TestClass();

var_dump($t::doSomething(10, static function ($passedNum) {
    return $passedNum * 5;
}));

// http://bologer.ru/php-anonimnye-funktsii-gde-i-kak-ispolzovat/
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
