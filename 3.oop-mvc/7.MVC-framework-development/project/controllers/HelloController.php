<?php

declare(strict_types=1);

namespace Project\Controllers;

use Core\Controller;
use Core\Page;
use Project\Models\Hello;

class HelloController extends Controller {

  public function index(): Page {
    $this->title = 'Фреймворк работает!';

    $hello = new Hello(); // тестовая модель для проверки базы

    return $this->render('hello/index');
  }
}
