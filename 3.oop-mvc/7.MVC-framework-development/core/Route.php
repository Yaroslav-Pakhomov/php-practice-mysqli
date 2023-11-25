<?php

declare(strict_types=1);

namespace Core;

/**
 * Класс для создания объектов маршрутов (роутов)
 *
 */
class Route {

    /**
     * URL
     */
    private string $path;

    /**
     * Контроллер
     */
    private string $controller;

    /**
     * Действие
     */
    private string $action;

    public function __construct(string $path, string $controller, string $action) {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * Свойства предназначены только для чтения, что достигается использованием магии
     */
    public function __get($property) {
        return $this->$property;
    }
}
