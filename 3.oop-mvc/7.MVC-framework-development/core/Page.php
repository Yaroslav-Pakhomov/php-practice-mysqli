<?php

declare(strict_types=1);

namespace Core;

class Page {
    private string $layout;
    private string $title;
    private mixed $view;
    private array $data;

    public function __construct(string $layout, string $title = '', $view = null, array $data = []) {
        $this->layout = $layout;
        $this->title = $title;
        $this->view = $view;
        $this->data = $data;
    }

    public function __get($property) {
        return $this->$property;
    }
}
