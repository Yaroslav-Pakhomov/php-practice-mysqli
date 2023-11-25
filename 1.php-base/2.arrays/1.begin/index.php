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

   $arr = [1, 2, 'a', 'b', null, true, false]; // создаем массив $arr
//   var_dump($arr);
   echo "<br>";

   $arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	echo $arr[0]; // выведет 'пн'
	echo $arr[1]; // выведет 'вт'
	echo $arr[2]; // выведет 'ср'
   echo "<br>";

?>