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

interface iUser {

    public function setName(string $name): void; // установить имя

    public function getName(): string;      // получить имя

    public function setAge(int $age): void;   // установить возраст

    public function getAge(): int;       // получить возраст
}
