<?php

declare(strict_types=1);

namespace Core;

use AllowDynamicProperties;

#[AllowDynamicProperties] class Dispatcher {

    public function getPage(Track $track) {
        // ...код
        // return контроллер -> render(параметры);

        // Делаем первую букву заглавной по типу: "NameController"
        $className = ucfirst($track->controller) . 'Controller';
        $fullName = "\\Project\\Controllers\\$className";

        try {
            $controller = new $fullName;

            if (method_exists($controller, $track->action)) {
                $result = $controller->{$track->action}($track->params);

                if ($result) {
                    return $result;
                }

                return new Page('default');
            }

            echo "Метод <b>{$track->action}</b> не найден в классе $fullName.";
            die();
        } catch (\Exception $error) {
            echo $error->getMessage();
            die();
        }
    }
}
