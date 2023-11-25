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

require_once '../TagClass.php';
require_once './ListItemClass.php';

// require_once '../interfaces/iTag.php';

class HtmlListClass extends TagClass {

    private array $items = []; // массив для хранения пунктов

    /**
     * Откажемся от вызова метода show()
     */
    public function __toString() {
        return $this->show();
    }

    /**
     * Добавление пунктов списка
     */
    public function addItem(ListItemClass $li): object {
        $this->items[] = $li;
        return $this; // вернем $this для цепочки
    }

    /**
     * Выводит список целиком
     */
    public function show(): string {
        $result = $this->open();

        foreach ($this->items as $item) {
            $result .= $item->show(); // open()->text()->close()
        }

        $result .= $this->close();

        return $result;
    }
}
