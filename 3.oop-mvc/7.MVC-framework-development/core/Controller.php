<?php

declare(strict_types=1);

namespace Core;

class Controller {
    protected string $layout = 'default';
    protected string $title = '';

    protected function render($view, $data = []): Page {
        return new Page($this->layout, $this->title, $view, $data);
    }
}
