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

require_once './TestTrait.php';

class Test {

	// подключаем трейт
	use TestTrait {
		TestTrait::method as public; // меняем метод на публичный
	}

	public function __construct() {
		// Используем приватный метод трейта:
		echo $this->method(); // выведет 'TestTrait method!!!'
	}
}
