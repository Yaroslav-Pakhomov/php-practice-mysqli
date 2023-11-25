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

$lang = 'ru';
switch ($lang) {
    case 'ru':
        echo 'рус';
        break;
    case 'en':
        echo 'англ';
        break;
    case 'de':
        echo 'нем';
        break;
    default:
        echo 'язык не поддерживается';
        break;
}
echo "<br>";
// Новый аналог switch case - match
echo match ($lang) {
    'ru' => 'рус',
    'en' => 'англ',
    'de' => 'нем',
    default => 'язык не поддерживается',
};
echo "<br>";

// Необязательность default

//$lang = 'ru';
switch ($lang) {
    case 'ru':
        echo 'рус';
        break;
    case 'en':
        echo 'англ';
        break;
    case 'de':
        echo 'нем';
        break;
}
echo "<br>";

// Необязательность break

$num = 1;
switch ($num) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
}
echo "<br>";

//$num = 1;
switch ($num) {
    case 1:
        echo 1;
    case 2:
        echo 2;
    case 3:
        echo 3;
}
// После запуска код выведет 1, затем 2, а затем 3
echo "<br>";

// $num имеет значение 1 или 2, то в переменную $result запишется 'a'.
// Если же переменная $num имеет значение 3, то в переменную $result запишется 'b':
$result = '';
switch ($num) {
    case 1:
    case 2:
        $result = 'a';
        break;
    case 3:
        $result = 'b';
        break;
}
echo $result;
echo "<br>";

// Очевиднее решить такую задачу через ифы:

//$num = 1;
if ($num == 1 || $num == 2) {
    $result = 'a';
}

if ($num == 3) {
    $result = 'b';
}

echo $result;

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>