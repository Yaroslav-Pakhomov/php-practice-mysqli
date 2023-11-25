<?php

declare(strict_types=1);

namespace Core;

/**
 * Маршрутизатор (роутер)
 *
 * Класс, который берёт массив роутов, берёт запрошенный URL, и определяет, какой из роутов соответствует данному урл.
 * После нахождения соответствующего роута наш класс должен получить части URL, соответствующие параметрам роута.
 *
 * Возвращает объект класса Track, содержащего имя контроллера, который должен быть вызван на данный запрос, имя действия и параметры из URL
 *
 */
class Track {

    /**
     * Контроллер
     */
    private string $controller;

    /**
     * Действие
     */
    private string $action;

    /**
     * Параметры
     */
    private array $params;

    public function __construct(string $controller, string $action, array $params = []) {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    // Свойства controller, action и params, доступные только для чтения
    public function __get($property) {
        return $this->$property;
    }
}
