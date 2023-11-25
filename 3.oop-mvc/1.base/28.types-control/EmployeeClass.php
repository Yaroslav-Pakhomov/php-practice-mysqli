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

require_once './PostClass.php';

class EmployeeClass {
    private string $name;
    private string $surname;
    private PostClass $post;

    public function __construct(string $name, string $surname, PostClass $post) {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setSurname(string $surname): void {
        $this->surname = $surname;
    }

    public function getSurname(): string {
        return $this->surname;
    }

    public function getPostName(): string {
        return $this->post->getName();
    }

    public function getPostSalary(): int {
        return $this->post->getSalary();
    }

    public function changePost(PostClass $post): void {
        $this->post->setName($post->getName());
        $this->post->setSalary($post->getSalary());
    }

}
