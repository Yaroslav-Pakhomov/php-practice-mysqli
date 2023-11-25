<?php

declare(strict_types=1);

// включение вывод всех ошибок
use JetBrains\PhpStorm\Pure;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

// Строковые функции

// Работа с регистром символов
// Функция strtoupper возвращает все буквенные символы, преобразованные в верхний регистр. strtoupper( строка $string ): строка
// Функция strtolower возвращает все буквенные символы, преобразованные в нижний регистр. strtolower( строка $string ): строка
// Функция ucfirst преобразует первый символ строки в верхний регистр ucfirst(строка $string): строка
// Функция lcfirst преобразует первый символ строки в нижний регистр lcfirst(строка $string): строка
// Функция ucwords преобразует в верхний регистр первый символ каждого слова в строке ucwords(строка $string): строка

// Работа с mb_strlen
// Функция mb_strlen получает длину строки mb_strlen(строка $string, ?строка $encoding = null): целое

// Работа с mb_substr, str_starts_with
// Функция mb_substr возвращает часть строки string, заданную параметрами start и length mb_substr(строка $string, целое $start, ?целое $length = null, ?строка $encoding = null ): строка
// Функция str_starts_with проверяет, начинается ли строка с заданной подстроки. Возвращает true, если haystack начинается с needle, false в противном случае. str_starts_with(строка $haystack, строка $needle): bool

// Работа с str_replace, strtr, substr_replace
// Функция str_replace заменяет все вхождения строки поиска строкой замены str_replace(что меняем, на что меняем, где меняем);
// Функция strtr преобразует заданные символы или заменяет подстроки strtr(что меняем, на что меняем, где меняем);
// Функция substr_replace() заменяет часть строки string, начинающуюся с символа с порядковым номером offset и (необязательной) длиной length, строкой replace и возвращает результат
// substr_replace(
//     array|string $string,
//     array|string $replace,
//     array|int $offset,
//     array|int|null $length = null
// ): string|array

// Работа с strpos, strrpos
// strpos(где ищем, что ищем, [откуда искать]); - возвращает позицию первого вхождения подстроки в другую строку.
// strrpos(где ищем, что ищем, [откуда искать]); - возвращает позицию последнего вхождения подстроки.

// Работа с explode, implode
// Функция explode разбивает строку в массив по определенному разделителю. explode(разделитель, строка);
// Функция implode сливает массив в строку с указанным разделителем. implode(разделитель, массив);

// Функция str_split
// Разбивает строку в массив str_split(строка, количество символов в элементе массива);

// Работа с trim, ltrim, rtrim
// Функция trim удаляет пробелы с начала и конца строки. Может также удалять другие символы, если их указать вторым параметром. trim(строка, [символы]);
// Функция ltrim удаляет пробелы с начала строки.
// Функция rtrim удаляет пробелы с конца строки.

// Работа с strrev
// Функция strrev переворачивает строку так, чтобы символы шли в обратном порядке. strrev(строка);

// Работа с str_shuffle
// Функция str_shuffle переставляет символы в строке в случайном порядке. str_shuffle(cтрока);

// Работа с number_format
// Функция number_format позволяет форматировать число. В основном используется для того, чтобы отделять тройки чисел пробелами, к примеру, из 1234567 она может сделать 1 234 567.
// Функция расставит пробелы между тройками и округлит дробь до двух знаков в дробной части.
// number_format(число);
// number_format(число, количество знаков);
// number_format(число, количество знаков, разделитель дробной части, разделитель тысяч);

// Работа с str_repeat
// Функция str_repeat повторяет строку заданное количество раз. str_repeat(строка, сколько раз повторить);

// Работа с strip_tags и htmlspecialchars
// Функция htmlspecialchars позволяет вывести теги в браузер так, чтобы он не считал их командами, а выводил как строки. Функция преобразует амперсанд & в &amp;, уголок < в &lt;, уголок > в &gt;. htmlspecialchars(строка);
// Функция strip_tags удаляет HTML теги из строки, не трогая их содержимого. Вторым необязательным параметром можно указать разрешенные теги - они не будут удалены. Их указываем в таком формате: '<b>' или '<b><p>', если хотим оставить несколько тегов. strip_tags(строка, [разрешенные теги]);

// Работа с chr и ord
// Функция chr находит символ по его ASCII коду. chr(код символа); chr(97);'a'
// Функция ord возвращает ASCII код символа. Параметром принимает один символ или целую строку (в этом случае возвращает код ее первого символа). ord(символ или строка); ord('a'); 97

// Работа с strchr, strrchr
// Функция strchr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ strchr(где ищем, что ищем);
// Функция strrchr находит последнее вхождение символа в строку и возвращает часть строки начиная с этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ strrchr(где ищем, что ищем);


// Работа с регистром символов
echo strtoupper('php'); // PHP
echo "<br>";
echo strtolower('PHP'); // php
echo "<br>";
echo ucfirst('london'); // London
echo "<br>";
echo lcfirst('London'); // london
echo "<br>";
echo ucwords('london is the capital of great britain'); // London Is The Capital Of Great Britain
echo "<br>";
echo ucfirst(strtolower('LONDON'));  // London
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с mb_strlen
echo mb_strlen('html css php'); // 12
echo "<br>";
$password = 'html_css';
echo mb_strlen($password);
echo "<br>";
if (mb_strlen($password) > 5 && mb_strlen($password) < 10) {
    echo 'Пароль подходит.';
} else {
    echo 'Нужно придумать другой пароль.';
}
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с mb_substr
$str = 'html css php';
echo mb_substr($str, 0, 4); // html
echo "<br>";
echo mb_substr($str, 5, 3); // css
echo "<br>";
echo mb_substr($str, 9, 3); // php
echo "<br>";
$str = 'Нужно придумать другой пароль.';
echo mb_substr($str, -3); // ль.
echo "<br>";
$strSearch = 'http://';
$strSearch2 = 'https://';
$lenStrSearch = mb_strlen($strSearch);
$lenStrSearch2 = mb_strlen($strSearch2);
// echo $lenStrSearch;
echo "<br>";
$str = 'http://practice.local/php-mysqli/1.php8-base/6.standard-functions/2.string/';
// echo mb_substr($str, 0, $lenStrSearch);
echo "<br>";
echo "<br>";
if ((str_starts_with($str, $strSearch)) || (str_starts_with($str, $strSearch2))) {
    echo 'Строка найдена.';
} else {
    echo 'Строка не найдена.';
}
echo "<br>";
echo "<br>";
echo "<br>";
if (str_starts_with($str, $strSearch) || (str_starts_with($str, $strSearch2))) {
    echo 'Строка найдена.';
} else {
    echo 'Строка не найдена.';
}
echo "<br>";
echo "<br>";
echo "<br>";

function subStrFinal($str, $strFinals): string {
    $response = '';
    foreach ($strFinals as $strFinal) {
        $lenStrFinal = mb_strlen($strFinal);
        if (in_array(mb_substr($str, -$lenStrFinal), $strFinals, true)) {
            $response = 'Строка найдена.';
            break;
        }
        $response = 'Строка не найдена.';
    }

    return $response;
}

$strFinals['png'] = '.png';
$strFinals['jpg'] = '.jpg';
$str = 'image.jpg';
echo subStrFinal($str, $strFinals);
echo "<br>";
echo "<br>";
echo "<br>";

$lenStrFinal1 = mb_strlen($strFinals['png']);
$lenStrFinal2 = mb_strlen($strFinals['jpg']);

$str = 'image.jpeg';
if ((mb_substr($str, -$lenStrFinal1) === $strFinals['png']) || (mb_substr($str, -$lenStrFinal2) === $strFinals['jpg'])) {
    echo 'Строка найдена.';
} else {
    echo 'Строка не найдена.';
}
echo "<br>";
echo "<br>";
echo "<br>";

$description = 'Дана строка. Если в этой строке более 5-ти символов - вырежьте из нее первые 5 символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.';

if (mb_strlen($description) > 5) {
    echo mb_substr($description, 0, 5) . '...';
} else {
    echo $description;
}
echo "<br>";
echo "<br>";
echo "<br>";


// Работа с str_replace
// str_replace(что меняем, на что меняем, где меняем);
echo str_replace('.', '-', '31.12.2013'); // 31-12-2013
echo "<br>";
echo "<br>";
echo str_replace(['a', 'b', 'c'], [1, 2, 3], 'abc-abc'); // 123-123
echo "<br>";
echo "<br>";
echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0,], '', '1a2b3c4b5d6e7f8g9h0'); // abcbdefgh
echo "<br>";
echo "<br>";
echo "<br>";

// Функция strtr
// strtr(что меняем, на что меняем, где меняем);
echo strtr('111222333', [1 => 'a', 2 => 'b', 3 => 'c']); // Результат выполнения кода: 'aaabbbccc'
echo "<br>";
echo "<br>";
echo strtr('111222333', '123', 'abc'); // Результат выполнения кода: 'aaabbbccc'
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с substr_replace
// substr_replace() заменяет часть строки string, начинающуюся с символа с порядковым номером offset и (необязательной) длиной length, строкой replace и возвращает результат
// substr_replace(
//     array|string $string,
//     array|string $replace,
//     array|int $offset,
//     array|int|null $length = null
// ): string|array
$str = 'Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).';
$subStr = mb_substr($str, 2, 5);
echo str_replace($subStr, ' !!! ', $str);
// Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
echo "<br>";
echo substr_replace($str, ' !!! ', 2, mb_strlen(' !!! ') + 1);
// Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с strpos, strrpos
// strpos(где ищем, что ищем, [откуда искать]); - возвращает позицию первого вхождения подстроки в другую строку.
// strrpos(где ищем, что ищем, [откуда искать]); - возвращает позицию последнего вхождения подстроки.
echo strpos('abc abc abc', 'b'); //
echo "<br>";
echo strrpos('abc abc abc', 'b'); //
echo "<br>";
echo strpos('abc abc abc', 'b', 3);
echo "<br>";
if (str_starts_with('http://site.ru', 'http://')) {
    echo 'да';
} else {
    echo 'нет';
}
echo "<br>";
echo strpos('aaa aaa aaa aaa aaa', ' ', 4);
echo "<br>";
echo "<br>";
$haystack = 'aaa aaa aaa aaa aaa';
$needle = ' ';
$pos1 = strpos($haystack, $needle);
$pos2 = strpos($haystack, $needle, $pos1 + 1);
$pos3 = strpos($haystack, $needle, $pos2 + 1);
echo $pos3;
echo "<br>";
echo "<br>";
echo posInclusion($haystack, 'bab', 20);
echo "<br>";

#[Pure]
/**
 * Дана строка $haystack, искомая в ней $needle. Определяет позицию N-го вхождения ($numberInclude).
 */ function posInclusion(string $haystack, string $needle, int $numberInclude): string {
    $pos = [];
    for ($i = 1; $i <= $numberInclude; $i++) {
        if ($i === 1) {
            $pos[$i] = getPos($haystack, $needle);
        } else {
            $pos[$i] = getPos($haystack, $needle, $pos[$i - 1] + 1);
        }
    }

    return isInclude($haystack, $needle, $numberInclude, $pos);
}

/**
 * Определяет позицию вхождения
 */
function getPos($haystack, $needle, $pos = 0): bool|int {
    return strpos($haystack, $needle, $pos) ?: false;
}

/**
 * Есть ли вхождение
 */
function isInclude($haystack, $needle, $numberInclude, $pos): string {
    $message = '';
    foreach ($pos as $key => $value) {
        if ($value && $key === $numberInclude) {
            $message = 'Вхождения номер ' . $numberInclude . ' подстроки "' . $needle . '" в строку "' . $haystack . '" - ' . $value . '.';
        } else {
            $message = 'Вхождения номер ' . $numberInclude . ' подстроки "' . $needle . '" в строку "' . $haystack . '" не найдено';
        }
    }

    return $message;
}

echo "<br>";
echo posInclusion($haystack, $needle, 3);


echo "<br>";
echo "<br>";
echo posInclusion($haystack, 'https://', 1);
echo "<br>";
echo "<br>";

if (!str_starts_with($haystack, 'https://')) {
    echo 'Строка не начинается с https://.';
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$pos = strpos('..aaa aaa aaa..aaa aaa', '..');
echo ($pos !== false) ? 'Позиция вхождения ' . $pos : 'Нет';
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с explode, implode

// Функция explode разбивает строку в массив по определенному разделителю. explode(разделитель, строка);
// Функция implode сливает массив в строку с указанным разделителем. implode(разделитель, массив);

$string = 'html css php';
$arrString = explode(' ', $string);
echo '<pre>';
var_dump($arrString);
echo '</pre>';
echo "<br>";

$arrWords = ['html', 'css', 'php'];
$string2 = implode(', ', $arrWords);
echo '<pre>';
echo $string2;
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

$date = '2022-07-06';
$arrDate = explode('-', $date);
$arrNewDate[] = $arrDate[2];
$arrNewDate[] = $arrDate[1];
$arrNewDate[] = $arrDate[0];
$stringDate = implode('.', $arrNewDate);

echo $date;
echo "<br>";
echo $stringDate;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Функция str_split

// Разбивает строку в массив str_split(строка, количество символов в элементе массива);

$string = '1234567890';

$arr1 = str_split($string, 2);
$arr2 = str_split($string);
$string2 = implode('-', $arr1);

echo '<pre>';
print_r($arr1);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

echo '<pre>';
print_r($arr2);
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";

echo '<pre>';
echo $string2;
echo '</pre>';
echo "<br>";
echo "<br>";
echo "<br>";


// Работа с trim, ltrim, rtrim

// Функция trim удаляет пробелы с начала и конца строки. Может также удалять другие символы, если их указать вторым параметром. trim(строка, [символы]);
// Функция ltrim удаляет пробелы с начала строки.
// Функция rtrim удаляет пробелы с конца строки.

$str = 'Дана строка.                                                ';

$str1 = 'Дана строка.';
echo $str . $str1 . PHP_EOL;
echo "<br>";
$str = rtrim($str);
echo $str . $str1;
echo "<br>";
echo "<br>";
echo "<br>";

$str2 = '/php/';
echo PHP_EOL;
echo $str2 . PHP_EOL;
$str2 = trim($str2, '/');
echo "<br>";
echo $str2;
echo "<br>";
echo "<br>";
echo "<br>";

$str3 = 'слова слова слова.          ';
$str3 = rtrim($str3);
$str3 = rtrim($str3, '.');
echo $str3 . '.' . PHP_EOL;
echo "<br>";
$str3 = 'слова слова слова          ';
$str3 = rtrim($str3);
$str3 = rtrim($str3, '.');
echo $str3 . '.' . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с strrev

// Функция strrev переворачивает строку так, чтобы символы шли в обратном порядке. strrev(строка);

$str = '1234567890';
$strRev = strrev($str);

echo $str . '.' . PHP_EOL;
echo "<br>";
echo $strRev . '.' . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";

function palindrome($string): string {
    if ($string === strrev($string)) {
        return 'Слово "' . $string . '" является палиндромом.';
    }

    return 'Слово "' . $string . '" не является палиндромом.';
}

echo palindrome('madam') . PHP_EOL;
echo "<br>";
echo palindrome('otto') . PHP_EOL;
echo "<br>";
echo palindrome('kayak') . PHP_EOL;
echo "<br>";
echo palindrome('nun') . PHP_EOL;
echo "<br>";
echo palindrome('level') . PHP_EOL;
echo "<br>";
echo palindrome('local') . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с str_shuffle
// Функция str_shuffle переставляет символы в строке в случайном порядке. str_shuffle(cтрока);

echo str_shuffle('local') . PHP_EOL;
echo "<br>";

$permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
echo substr(str_shuffle($permitted_chars), 0, 6);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Работа с number_format
// Функция number_format позволяет форматировать число. В основном используется для того, чтобы отделять тройки чисел пробелами, к примеру, из 1234567 она может сделать 1 234 567.
// Функция расставит пробелы между тройками и округлит дробь до двух знаков в дробной части.

// number_format(число);
// number_format(число, количество знаков);
// number_format(число, количество знаков, разделитель дробной части, разделитель тысяч);

echo number_format(111234567.878, 2, '.', ' ') . PHP_EOL;
echo "<br>";
echo number_format(111234567.878, 3, ',', ' ') . PHP_EOL;
echo "<br>";
echo number_format(12345678, 0, '.', ' ') . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>" . PHP_EOL;


// Работа с str_repeat
// Функция str_repeat повторяет строку заданное количество раз. str_repeat(строка, сколько раз повторить);

for ($i = 1; $i <= 9; $i++) {
    echo str_repeat('x', $i);
    echo "<br>" . PHP_EOL;
}
echo "<br>" . PHP_EOL;

for ($i = 1; $i <= 9; $i++) {
    echo str_repeat('' . $i, $i);
    echo "<br>" . PHP_EOL;
}


// Работа с strip_tags и htmlspecialchars
// Функция htmlspecialchars позволяет вывести теги в браузер так, чтобы он не считал их командами, а выводил как строки. Функция преобразует амперсанд & в &amp;, уголок < в &lt;, уголок > в &gt;. htmlspecialchars(строка);
// Функция strip_tags удаляет HTML теги из строки, не трогая их содержимого. Вторым необязательным параметром можно указать разрешенные теги - они не будут удалены. Их указываем в таком формате: '<b>' или '<b><p>', если хотим оставить несколько тегов. strip_tags(строка, [разрешенные теги]);

echo strip_tags('html, <b>php</b>, js') . PHP_EOL;
echo "<br>";
echo "<br>";
echo strip_tags('<p><i>html</i>, <a href="#"><b>php</b></a>, js</p>', ['p', 'b', 'i']) . PHP_EOL;
echo "<br>";
echo "<br>";
echo htmlspecialchars('html, <b>php</b>, js') . PHP_EOL;
echo "<br>";
echo "<br>";
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text, ['p', 'a']) . PHP_EOL;
echo "<br>";
echo "<br>";
echo strip_tags($text, '<p><a>') . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


// Работа с chr и ord
// Функция chr находит символ по его ASCII коду. chr(код символа); chr(97);'a'
// Функция ord возвращает ASCII код символа. Параметром принимает один символ или целую строку (в этом случае возвращает код ее первого символа). ord(символ или строка); ord('a'); 97

echo ord('a') . PHP_EOL;
echo "<br>";
echo ord('b') . PHP_EOL;
echo "<br>";
echo ord('c') . PHP_EOL;
echo "<br>";
echo ord(' ') . PHP_EOL;
echo "<br>";
echo chr(33) . PHP_EOL;
echo "<br>";
echo "<br>";
echo "<br>";


// Работа с strchr, strrchr
// Функция strchr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ strchr(где ищем, что ищем);
// Функция strrchr находит последнее вхождение символа в строку и возвращает часть строки начиная с этого места до конца строки. Если второй параметр состоит более чем из одного символа, используется только первый символ strrchr(где ищем, что ищем);


echo strstr('site.ru/folder1/folder2/page.html', '/') . PHP_EOL; // Результат  /folder1/folder2/page.html
echo "<br>";
echo strrchr('site.ru/folder1/folder2/page.html', '/'); // Результат  /page.html
echo "<br>";
echo strstr('ab-cd-ef', '-');
echo "<br>";
echo strrchr('ab-cd-ef', '-');
echo "<br>";
