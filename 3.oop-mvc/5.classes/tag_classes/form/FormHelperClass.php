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

require_once '../TagHelperClass.php';

class FormHelperClass extends TagHelperClass {

    public function openForm(array $attrs = []): string {
        return $this->open('form', $attrs);
    }

    public function closeForm(): string {
        return $this->close('form');
    }

    public function input(array $attrs = []): string {

        $name = $attrs['name'] ?? '';

        // Если есть GET/POST запрос
        $attrs['value'] = !empty($name) ? $_REQUEST[$name] : '';

        return $this->open('input', $attrs);
    }

    public function password(): string {
        $attrs['type'] = 'password';
        return $this->open('input', $attrs);
    }

    public function hidden(): string {
        $attrs['type'] = 'hidden';
        return $this->open('input', $attrs);
    }

    public function submit(): string {
        $attrs['type'] = 'submit';
        return $this->open('input', $attrs);
    }

    public function checkbox(array $attrs = []): string {
        $attrs['type'] = 'checkbox';
        $attrs['value'] = 1;

        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            $attrs['checked'] = isset($_REQUEST[$name]) && (int)$_REQUEST[$name] === 1;

            $hidden = $this->hidden(['name' => $name, 'value' => '0']);
        } else {
            $hidden = '';
        }

        return $hidden . $this->open('input', $attrs);
    }

    public function textarea(array $attrs = []): string {

        $text = '';
        if (isset($attrs['name'])) {
            $name = $attrs['name'];

            // Если есть GET/POST запрос
            $text = $_REQUEST[$name] ?? '';
        }

        return $this->open('textarea', $attrs) . $text . $this->close('textarea');
    }

    public function select(array $attrs = [], array $options = []): string {

        $option_tags = implode('', $options);

        return $this->open('select', $attrs) . $option_tags . $this->close('select');
    }

    public function option(array $option = []): string {
        if (isset($option['attrs']['selected'])) {
            $name = $option['attrs']['selected'];

            $option['attrs']['selected'] = isset($_REQUEST[$name]);
        }

        return $option ? $this->open('option', $option['attrs']) . $option['text'] . $this->close('option') : '';
    }
}
