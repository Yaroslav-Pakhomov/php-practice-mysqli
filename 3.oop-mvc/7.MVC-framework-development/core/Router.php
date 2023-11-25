<?php

declare(strict_types=1);

namespace Core;

/**
 * Класс для создания объектов маршрутов (роутов)
 *
 */
class Router {

    /**
     * Определяет, какой из роутов соответствует данному $uri
     *
     * @param $routes
     * @param $uri
     * @return Track
     */
    public function getTrack($routes, $uri): Track {
        foreach ($routes as $route) {
            $path = (string)$route->path;
            $action = (string)$route->action;
            $controller = (string)$route->controller;
            // echo '<br>';
            // echo '<br>';
            // echo $path;
            // echo '<br>';
            // echo $action;
            // echo '<br>';
            // echo $controller;
            // echo '<br>';

            $pattern = $this->createPattern($path); // см. описание метода
            // echo '<br>';
            // echo $pattern;
            // echo '<br>';

            // Проверяем адрес URI на соответствие регулярке
            // Если URI подойдет под регулярку, в $params будут параметры
            if (preg_match($pattern, $uri, $params)) {
                $params = $this->clearParams($params);  // очищаем параметры от элементов с числовыми ключами

                echo '<pre>';
                print_r($params);
                echo '</pre>';

                return new Track($controller, $action, $params);
            }
        }

        return new Track('error', 'notFound'); // если ни один роут не подойдет

    }

    /**
     * Метод преобразует путь из роута в регуляку,
     * подставляя вместо параметров роута именованные карманы
     * см. тут про такие карманы http://code.mu/ru/php/video/named-pockets-in-php-regulars/
     * к примеру, из адреса '/test/:var1/:var2/' метод
     * сделает регулярку '#^/test/(?<var1>[^/]+)/(?<var2>[^/]+)/?$#'
     *
     * @param string $path
     *
     * @return string
     */
    private function createPattern(string $path): string {
        return '#^' . preg_replace('#/:([^/]+)#', '/(?<$1>[^/]+)', $path) . '/?$#';
    }

    /**
     *
     * @param array $params
     * @return array
     */
    private function clearParams(array $params): array {
        $result = [];

        foreach ($params as $key => $param) {
            if (!is_int($key)) {
                $result[$key] = $param;
            }
        }

        return $result;
    }
}
