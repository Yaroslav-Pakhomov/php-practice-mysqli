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


class ValidatorClass {

    /**
     * Проверяет строку на то, что она корректный email
     *
     * @param string $str
     *
     * @return mixed
     */
    public function isEmail(string $str): mixed {
        return filter_var($str, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Проверяет строку на то, что она корректное имя домена
     *
     * @param string $str
     *
     * @return mixed
     */
    public function isDomain(string $str): mixed {
        return filter_var($str, FILTER_VALIDATE_DOMAIN);
    }

    /**
     * Проверяет число на то, что оно входит в диапазон
     *
     * @param int $num
     * @param int $from
     * @param int $to
     *
     * @return bool
     */
    public function inRange(int $num, int $from, int $to): bool {
        return $from <= $num && $num <= $to;
    }

    /**
     * Проверяет строку на то, что ее длина входит в диапазон
     *
     * @param string $str
     * @param int $from
     * @param int $to
     *
     * @return bool
     */
    public function inLength(string $str, int $from, int $to): bool {
        return $this->inRange(strlen($str), $from, $to);
    }
}
