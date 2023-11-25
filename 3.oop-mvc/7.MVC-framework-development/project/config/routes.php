<?php

declare(strict_types=1);

use Core\Route;

/**
 * Маршрутов (роутов)
 *
 * Указывают соответствия между URL и контроллерами с действиями
 */

return [
    new Route('/my-page1/', 'page', 'show1'),
    new Route('/my-page2/', 'page', 'show2'),

    // в адресной строке вбито /test/1/2/, роут, соответствующий этому адресу:
    new Route('/test/:var1/:var2/', 'test', 'index'),

    // имя контроллера будет test, имя действия - index, а массив параметров ['var1' => 1, 'var2' => 2]
];
