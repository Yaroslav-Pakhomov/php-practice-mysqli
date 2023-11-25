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


class SessionShellClass {

    /**
     * Удобно стартуем сессию в конструкторе класса
     */
    public function __construct() {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    /**
     * Устанавливает переменную сессии
     *
     * @param string $name
     * @param string|float|int $value
     *
     * @return void
     */
    public function set(string $name, string|float|int $value): void {
        if (!$this->exists($name)) {
            $_SESSION[$name] = $value;
        }
    }

    /**
     * Получает переменную сессии
     *
     * @param string $name
     *
     * @return mixed
     */
    public function get(string $name): mixed {
        if ($this->exists($name)) {
            return $_SESSION[$name];
        }

        return FALSE;
    }

    /**
     * Удаляет переменную сессии
     *
     * @param string $name
     *
     * @return void
     */
    public function del(string $name): void {
        if ($this->exists($name)) {
            unset($_SESSION[$name]);
        }
    }

    /**
     * Проверяет переменную сессии
     *
     * @param string $name
     *
     * @return bool
     */
    public function exists(string $name): bool {
        return isset($_SESSION[$name]);
    }

    /**
     * Разрушает сессию
     *
     * @return void
     */
    public function destroy(): void {
        session_destroy();
    }
}
