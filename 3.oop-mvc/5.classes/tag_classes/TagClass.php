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

require_once '../interfaces/iTag.php';

class TagClass implements iTag {
    private string $name; // свойство для хранения имени тега
    private string $text = ''; // свойство для хранения текста тега
    private array $attrs = []; // свойство для хранения массива атрибутов тега

    public function __construct(string $name) {
        $this->name = $name;
    }


    // -------------------------------------
    // Теги в классе Tag - начало
    // -------------------------------------

    /**
     * Выводим открывающую часть тега
     */
    public function open(): string {
        $name = $this->name;
        $attrsStr = $this->getAttrsStr($this->attrs);

        return '<' . $name . $attrsStr . '>';
    }

    /**
     * Выводим закрывающую часть тега
     */
    public function close(): string {
        $name = $this->name;
        return '</' . $name . '>';
    }

    /**
     * Открывающий тег, текст и закрывающий тег
     */
    public function show(): string {
        return $this->open() . $this->text . $this->close();
    }

    // -------------------------------------
    // Теги в классе Tag - конец
    // -------------------------------------


    // -------------------------------------
    // Атрибуты в классе Tag - начало
    // -------------------------------------

    /**
     * Добавление нескольких атрибутов в массиве
     */
    public function setAttrs(array $attrs): object {
        foreach ($attrs as $attr_name => $attr_value) {
            $this->setAttr($attr_name, $attr_value);
        }

        return $this; // возвращаем $this чтобы была цепочка
    }

    /**
     * Добавление одного атрибута
     */
    public function setAttr(string $name, string|bool $value): object {
        $this->attrs[$name] = $value;
        return $this; // возвращаем $this чтобы была цепочка
    }

    /**
     * Удаление нескольких атрибутов в массиве
     */
    public function removeAttrs(array $attrs): object {
        foreach ($attrs as $attr_name) {
            $this->removeAttr($attr_name);
        }

        return $this; // возвращаем $this чтобы была цепочка
    }

    /**
     * Удаление одного атрибута
     */
    public function removeAttr(string $name): object {
        if (isset($this->attrs[$name])) {
            unset($this->attrs[$name]);
        }

        return $this; // возвращаем $this чтобы была цепочка
    }

    /**
     * Формирование строки атрибутов в теге
     */
    private function getAttrsStr(array $attrs): string {
        if (!empty($attrs)) {
            $result = '';

            foreach ($attrs as $attr_name => $attr_value) {
                // Если значение атрибута равно true
                if ($attr_value === TRUE) {
                    $result .= ' ' . $attr_name; // это атрибут без значения
                } else {
                    $result .= ' ' . $attr_name . '="' . $attr_value . '"'; // это атрибут со значением
                }
            }

            return $result;
        }

        return '';
    }

    // -------------------------------------
    // Атрибуты в классе Tag - конец
    // -------------------------------------


    // -------------------------------------
    // CSS классы в классе Tag - начало
    // -------------------------------------

    /**
     * Добавляем класс в атрибут 'class'
     */
    public function addClass(string $className): object {
        // Существование атрибута 'class'
        if (isset($this->attrs['class'])) {

            // Получаем массив классов
            $classNames = explode(' ', $this->attrs['class']);

            if (!in_array($className, $classNames)) {
                $classNames[] = $className;
                $this->attrs['class'] = implode(' ', $classNames);
            }
        } else {
            $this->attrs['class'] = $className;
        }

        return $this;
    }

    /**
     * Удаляем класс из атрибута 'class'
     */
    public function removeClass(string $className): object {
        // Существование атрибута 'class'
        if (isset($this->attrs['class'])) {

            // Получаем массив классов
            $classNames = explode(' ', $this->attrs['class']);

            if (in_array($className, $classNames)) {
                $classNames = $this->removeElem($className, $classNames);

                $this->attrs['class'] = implode(' ', $classNames);
            }
        }

        return $this;
    }

    /**
     * Удаляем элемент из массива по его тексту
     */
    private function removeElem(string $elem, array $arr): array {
        $key = array_search($elem, $arr, true); // находим ключ элемента по его тексту
        // array_splice($arr, $key, 1);
        unset($arr[$key]);

        return $arr;
    }

    // -------------------------------------
    // CSS классы в классе Tag - конец
    // -------------------------------------


    // -------------------------------------------
    // Дополнительные методы класса Tag - начало
    // -------------------------------------------

    /**
     *  Получаем название тега
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * Установка текста тега
     */
    public function setText($text): TagClass {
        $this->text = $text;
        return $this;
    }

    /**
     *  Получаем текст тега
     */
    public function getText(): string {
        return $this->text;
    }

    /**
     *  Получаем все атрибуты тега
     */
    public function getAttrs(): array {
        return $this->attrs;
    }

    /**
     *  Получаем заданный атрибут тега
     */
    public function getAttr(string $name_attr): string|null {
        return $this->attrs[$name_attr] ?? NULL;
    }

    // -------------------------------------------
    // Дополнительные методы класса Tag - конец
    // -------------------------------------------

}
