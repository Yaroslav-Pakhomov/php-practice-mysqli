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

require_once './TagClass.php';

/**
 * Класс, с помощью которого можно создавать HTML теги
 */
class TagHelperClass {

    // Открывающий тег
    public function open($name, $attrs = []): string {
        $attrsStr = $this->getAttrsStr($attrs);

        return '<' . $name . $attrsStr . '>';
    }

    public function close($name): string {
        return '</' . $name . '>';
    }

    public function show($name, $text, $attrs = []): string {
        return $this->open($name, $attrs) . $text . $this->close($name);
    }

    private function getAttrsStr($attrs): string {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $name => $value) {
                if ($value === TRUE) {
                    $result .= ' ' . $name;
                } else {
                    $result .= ' ' . $name . '="' . $value . '"';
                }
            }

            return $result;
        }

        return '';
    }
}
