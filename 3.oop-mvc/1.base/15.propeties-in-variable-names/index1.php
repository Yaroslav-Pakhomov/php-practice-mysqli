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


// Переменные названия свойств объектов


class User {
    public string $surname; // фамилия
    public string $name;  // имя
    public string $patronymic; // отчество
    public int $age; // возраст

    public function __construct(int $age, string $surname, string $name, string $patronymic) {
        $this->age = $age;
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }
}


$user = new User(21, 'Иванов', 'Иван', 'Иванович');

$prop_name = 'name';
$prop_age = 'age';

echo $user->$prop_name; // выведет 'john'

echo '<br>';
echo '<br>';

echo $user->$prop_age;

echo '<br>';
echo '<br>';
echo '<br>';


// Массив свойств

$props = ['surname', 'name', 'patronymic'];

echo $user->{$props[0]};

echo '<br>';
echo '<br>';

echo $user->{$props[1]};

echo '<br>';
echo '<br>';

echo $user->{$props[2]};


// Ассоциативный массив

$props = ['prop1' => 'surname', 'prop2' => 'name', 'prop3' => 'patronymic'];

echo '<br>';
echo '<br>';
echo '<br>';

echo $user->{$props['prop1']};


// Имя свойства из функции
function getProp(): string {
    return 'surname';
}

echo '<br>';
echo '<br>';
echo '<br>';

echo $user->{getProp()}; // выведет 'Иванов'


// Имя свойства из свойства другого объекта
class Prop {
    public string $value;

    public function __construct($value) {
        $this->value = $value;
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

$prop = new Prop('surname'); // будем выводить значение свойства surname

echo $user->{$prop->value}; // выведет 'Иванов'

echo '<br>';
echo '<br>';

$prop = new Prop('name'); // будем выводить значение свойства name

echo $user->{$prop->value}; // выведет 'Иванов'


// Имя свойства из метода другого объекта
class GetProp {
    private string $value;

    public function __construct($value) {
        $this->value = $value;
    }

    public function getValue(): string {
        return $this->value;
    }
}

echo '<br>';
echo '<br>';
echo '<br>';

$getter_prop = new GetProp('patronymic');

echo $user->{$getter_prop->getValue()};
