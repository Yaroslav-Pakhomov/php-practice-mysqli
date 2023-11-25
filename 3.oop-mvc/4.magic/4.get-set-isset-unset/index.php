<?php

declare(strict_types=1);

/**
 * @property int|mixed|null $a
 * @property mixed|null $var1
 * @property mixed|null $var2
 */
class Test {

    public string $test = 'property test';

    public function __toString(): string {
        return 'class Test';
    }

    public function test(): void {
        echo 'Method test class Test. Have property $test: ' . $this->test . '.';
    }
}

/**
 * @property mixed|null $var1
 * @property mixed|null $var2
 * @property mixed|null $test
 * @property int|mixed|null $a
 */
class PropertyTest {
    /**  Место хранения перегружаемых данных.  */
    private array $data = [];

    public function __construct(array $arguments = []) {
        foreach ($arguments as $name => $value) {
            $this->$name = $value;
        }
    }

    public function __set($name, $value) {
        echo "Установка поля '$name' в '$value'.\n";
        $this->data[$name] = $value;
    }

    public function __get($name) {
        echo "Получение поля '$name': ";
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error('Неопределённое свойство в __get(): ' . $name . ' в файле ' . $trace[0]['file'] . ' на строке ' . $trace[0]['line']);
        return null;
    }

    public function __isset($name) {
        echo "Установлено ли поля '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name) {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }

}


echo "<pre>\n";

$data = [
    'var1' => 1,
    'var2' => 'string',
    'test' => new Test(),
];

$obj = new PropertyTest($data);
echo '<br><br>';

echo 'Работа с простыми полями';
echo '<br><br>';
echo $obj->var1;
echo '<br><br>';
echo $obj->var2;
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';


echo 'Работа с полем класса';
echo '<br><br>';
echo $obj->test->test;
echo '<br><br>';
$obj->test->test();
echo '<br><br>';
var_dump(isset($obj->test));
echo '<br><br>';
unset($obj->test);
echo '<br><br>';
var_dump(isset($obj->test));
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';
echo '<br><br>';


$obj->a = 1;
echo $obj->a . "\n\n";

var_dump(isset($obj->a));
unset($obj->a);
var_dump(isset($obj->a));
echo "\n";
