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

// Инициализируем сессию
session_start();
$_SESSION['test'] = 'abcde';
echo "<br>";
echo "<br>";
echo "<br>";

// Нюансы
// Сессия пользователя хранится на сервере. При этом она живет не вечно, а всего около получаса - если пользователь за это время не выполнил никаких обращений к сайту, то его сессия удалится и станет пустой.


// Возможные проблемы
// Основная проблема при работе с сессией следующая: нельзя делать никакого вывода в браузер до окончания работы с сессиями, в противном случае вы увидите следующую ошибку: Warning: Cannot send session cookie - headers already sent.

// Что такое вывод в браузер? Это любой символ до <?php, например, текст или тег, даже пробел, а также сообщение об ошибке со стороны PHP. Кроме того нельзя делать выводы через echo, var_dump и print_r.

// Кодировка вашего документа обязательно должна быть utf-8 без BOM. Если она будет просто utf-8, то перед <?php будет вставлен спец. символ, характерный для данной кодировки и сессии работать не будут.

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




