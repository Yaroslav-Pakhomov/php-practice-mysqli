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

class EmployeesCollectionClass {
    private array $employees = []; // массив работников, по умолчанию пустой

    // Получаем всех работников в виде массива
    public function get(): array {
        return $this->employees;
    }

    // Подсчитываем количество хранимых работников
    public function count(): int {
        return count($this->employees);
    }

    // Добавляем нового работника
    public function add($newEmployee): void {
        // Если такого работника нет - то добавляем
        if ($this->existInArr($newEmployee)) {
            $this->employees[] = $newEmployee;
        }

        // сравниваем через == или === соответственно
        // if (!$this->exist($newEmployee)) {
        //     $this->employees[] = $newEmployee; // $employee - объект класса EmployeeClass
        // }
    }

    private function existInArr($newEmployee): bool {
        // сравниваем через == или === соответственно
        return !in_array($newEmployee, $this->employees, FALSE) && !in_array($newEmployee, $this->employees, TRUE);
    }

    // Проверки существования работника в массиве объектов
    private function exist($newEmployee): bool {
        foreach ($this->employees as $employee) {
            if ($employee == $newEmployee || $employee === $newEmployee) { // сравниваем через == или ===
                return true;
            }
        }

        return false;
    }

    // Код метода exists можно заменить стандартной PHP функцией in_array. Нужно только знать, как она выполняет сравнение - по-двойному равно или по-тройному.

    // Эта функция имеет третий необязательный параметр. Если он не установлен или равен false - функция сравнивает по-двойному равно, а равен true - то по-тройному.
}
