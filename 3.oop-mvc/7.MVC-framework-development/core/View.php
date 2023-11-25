<?php

declare(strict_types=1);

namespace Core;

/**
 * Представление данных
 */
class View {
    public function render(Page $page): false|string|null {
        return $this->renderLayout($page, $this->renderView($page));
    }

    /**
     * Получает файл лэйаута/слоя (фонового, статического слоя) и подставлять в него значение переменных $title и $content
     *
     * @param Page $page
     * @param $content
     *
     * @return false|string
     */
    private function renderLayout(Page $page, $content): false|string {
        $layoutPath = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . "../project/layouts/$page->layout.php";

        if (file_exists($layoutPath)) {
            ob_start();
            $title = $page->title;
            include $layoutPath; // тут будут доступны переменные $title и $content
            return ob_get_clean();
        }

        return FALSE;
    }

    /**
     * Получает файл представления и подставляет в него значения переменных
     *
     * Переменные передаются в ассоциативном массиве, массив нужно превратить в переменные.
     * Затем подключить файл с представлением через include
     *
     * Для преобразования массива в переменные используется специальная функция extract.
     *
     * @param Page $page
     *
     * @return false|string
     */
    private function renderView(Page $page): false|string {
        $viewPath = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']) . "../project/views/$page->view.php";

        if (file_exists($viewPath)) {
            ob_start();
            $data = $page->data;
            extract($data);    // массив в переменные
            include $viewPath; // подключаем файл с представлением
            return ob_get_clean();
        }

        return FALSE;
    }
}
