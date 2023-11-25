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


class CookieShellClass {

    /**
     *  Устанавливает куки
     *  $time, задает время в секундах, через сколько кука умрет
     *
     * @param string $name
     * @param float|string $value
     * @param int $time
     *
     * @return string
     */
    public function set(string $name, float|string $value, int $time = 0): string {

        // если куки нет
        if (!$this->exists($name)) {

            // установка кук
            $time ? setcookie($name, $value, time() + $time) : setcookie($name, $value);

            // Мгновенная установка кук, вручную запишем ее в массив
            $_COOKIE[$name] = $value;

            return 'Кука ' . $name . ' - установлена';
        }

        // если значение куки отличается
        if ((int)$this->get($name) !== (int)$value) {
            // установка кук
            $time ? setcookie($name, $value, time() + $time) : setcookie($name, $value);

            // Мгновенная установка кук, вручную запишем ее в массив
            $_COOKIE[$name] = $value;

            return 'Кука ' . $name . ' - переопределена';
        }

        return '';
    }

    /**
     * Получает куки
     *
     * @param string $name '
     *
     * @return mixed
     */
    public function get(string $name): mixed {
        return $_COOKIE[$name] ?? 'NULL';
    }

    /**
     * Удаляет куки
     *
     * @param string $name
     *
     * @return string
     */
    public function del(string $name): string {

        // если кука есть
        if ($this->exists($name)) {
            // удаление кук
            setcookie($name, '', time());
            // Мгновенная удаление кук, вручную удалим ее из массив
            unset($_COOKIE[$name]);

            return 'Кука ' . $name . ' - удалена';
        }

        return '';

    }

    /**
     * Проверяет наличие куки
     *
     * @param string $name
     *
     * @return bool
     */
    public function exists(string $name): bool {
        return isset($_COOKIE[$name]);
    }
}
