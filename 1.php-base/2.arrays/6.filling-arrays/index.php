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

   $arr = [];     // создаем пустой массив
	$arr[] = 'a';  // элемент добавится в ключ 0
	$arr[] = 'b';  // элемент добавится в ключ 1
	$arr[] = 'c';  // элемент добавится в ключ 2
//	var_dump($arr); // выведет ['a', 'b', 'c']
   echo "<br>";
   
   $arr = ['a', 'b', 'c']; // объявляем массив с элементами
	$arr[] = 'd'; // элемент добавится в ключ 3
	$arr[] = 'e'; // элемент добавится в ключ 4
	var_dump($arr); // выведет ['a', 'b', 'c', 'd', 'e']
   echo "<br>";

	// Явное указание ключей

   $arr = [];
	$arr['a'] = 1;
	$arr['b'] = 2;
	$arr['c'] = 3;
	var_dump($arr); // выведет ['a' => 1, 'b' => 2, 'c' => 3]
   echo "<br>";
   
?>