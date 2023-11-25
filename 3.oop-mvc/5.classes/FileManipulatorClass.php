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


class FileManipulatorClass {

    /**
     * Создает файл
     *
     * @param string $filePath
     *
     * @return bool|int
     */
    public function create(string $filePath): bool|int {
        $arrPath = explode('/', $filePath);
        $dirPath = array_slice($arrPath, 0, (count($arrPath) - 1));
        $dirPathStr = implode('/', $dirPath);

        if (!is_dir($dirPathStr)) {
            mkdir($dirPathStr);
        }
        return file_put_contents($filePath, '');
    }

    /**
     * Удаляет файл
     *
     * @param string $filePath
     *
     * @return bool
     */
    public function delete(string $filePath): bool {
        if (file_exists($filePath)) {
            return unlink($filePath);
        }

        return FALSE;
    }

    /**
     * Копирует файл
     *
     * @param string $filePath
     * @param string $copyPath
     *
     * @return bool
     */
    public function copy(string $filePath, string $copyPath): bool {
        return copy($filePath, $copyPath);
    }

    /**
     * Переименовывает файл
     * вторым параметром принимает новое имя файла (только имя, не путь)
     *
     * @param string $filePath
     * @param string $newName
     *
     * @return bool
     */
    public function rename(string $filePath, string $newName): bool {
        $arrPath = explode('/', $filePath);
        $dirPath = array_slice($arrPath, 0, (count($arrPath) - 1));

        return rename($filePath, implode('/', $dirPath) . '/' . $newName);
    }

    /**
     * Перемещает файл
     *
     * @param string $filePath
     * @param string $newPath
     *
     * @return bool
     */
    public function replace(string $filePath, string $newPath): bool {
        $arrPath = explode('/', $newPath);
        $dirPath = array_slice($arrPath, 0, (count($arrPath) - 1));
        $dirPathStr = implode('/', $dirPath);

        if (!is_dir($dirPathStr)) {
            mkdir($dirPathStr);
        }

        return rename($filePath, $newPath);
    }

    /**
     * Узнает размер файла в мегабайтах
     *
     * @param string $filePath
     *
     * @return float|bool|int
     */
    public function weigh(string $filePath): float|bool|int {
        return filesize($filePath) / (1024 * 1024);
    }
}
