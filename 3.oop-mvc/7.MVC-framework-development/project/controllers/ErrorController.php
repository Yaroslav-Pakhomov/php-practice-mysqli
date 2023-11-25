<?php

declare(strict_types=1);

namespace Project\Controllers;

use Core\Controller;
use Core\Page;

class ErrorController extends Controller {

    public function notFound(): Page {
        $this->title = 'Страница не найдена';

        return $this->render('error/notFound');
    }
}
