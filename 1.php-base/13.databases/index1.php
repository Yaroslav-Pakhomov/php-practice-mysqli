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

// Данные для подключения
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = 'root';      // пароль
$name = 'mydb';      // имя базы данных


// Подключение
$link = mysqli_connect($host, $user, $pass, $name);
// Кодировка
// mysqli_query($link, "SET NAME 'utf8'");


// Запрос, если команда WHERE отсутствует, то выберутся все записи из таблицы
$query = 'SELECT * FROM `users`';


// Формируем объект выборки
$result = mysqli_query($link, $query) or die(mysqli_error($link));
// var_dump($result);


// Формируем массив данных в цикле
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
// var_dump($data); // здесь будет массив с результатом

// Выводим данные через цикл
foreach ($data as $user) {
    echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
    echo '<br>';
}

// ---------------------------------------------------
// Функция для проверки и отладки запросов - начало
// ---------------------------------------------------
/**
 * Функция для проверки и отладки запросов
 *
 * @param false|mysqli $link подключение
 * @param string $query запрос
 */
function dataOutput(false|mysqli $link, string $query): void {
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) {
    }

    foreach ($data as $user) {
        echo 'Имя - ' . $user['name'] . ', возраст - ' . $user['age'] . ', ЗП - ' . $user['salary'] . '.';
        echo '<br>';
    }
}

// --------------------------------------------------
// Функция для проверки и отладки запросов - конец
// --------------------------------------------------


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Выборка записей при SQL запросе к базе в PHP

// $query = "SELECT * FROM таблица WHERE условие";

// В команду WHERE можно писать ограничения на выбираемые записи, в условии допустимы следующие операции сравнения: =, !=, <>, <, >, <=, >=.

// Выберите юзеров с зарплатой равной или большей 500.
$query = "SELECT * FROM users WHERE salary >= 500";
dataOutput($link, $query);
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// В условии выборки можно делать более сложные комбинации с помощью команд OR и AND. Работают они так же, как и их аналоги в PHP конструкции if.

// Выберем юзеров с зарплатой 500 И возрастом 23 года
$query = "SELECT * FROM users WHERE salary = 500 AND age = 23";
dataOutput($link, $query);
echo '<br>';

// Выберем юзеров с зарплатой 500 ИЛИ возрастом 23 года.
$query = "SELECT * FROM users WHERE salary = 500 OR age = 23";
dataOutput($link, $query);
echo '<br>';

// Выберите всех юзеров в возрасте от 23 лет до 27 лет или с зарплатой от 400 до 1000
$query = "SELECT * FROM users WHERE (age > 23 AND age < 27) OR (salary > 400 AND salary < 1000)";
dataOutput($link, $query);
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Вместо звездочки, которую мы ставим после команды SELECT, через запятую можно перечислить имена нужных полей.

// Выберите из таблицы users имя, возраст и зарплату для каждого работника
$query = "SELECT name, age, salary FROM users";
dataOutput($link, $query);
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Вставка записей через SQL запрос в PHP
// Добавляются новые записи в таблицу с помощью команды INSERT INTO.
// $query = "INSERT INTO таблица (поле1, поле2...) VALUES (значение1, значение2...)";
// Не указываем столбец id и его значение, так как значение этого столбца проставится базой автоматически.

// В таблицу users добавим нового юзера
$query = "INSERT INTO users (name, age, salary) VALUES ('user7', 30, 1000)";
// Нужно выполнить этот запрос через mysqli_query
// mysqli_query($link, $query) or die(mysqli_error($link));

// Отсутствующие столбцы
// В таком случае не указанные столбцы возьмут значение по умолчанию. Если такое значение не указано в PhpMyAdmin, то это приведет к ошибке и такой запрос откажется выполнятся.
$query = "INSERT INTO users () VALUES ()";
// mysqli_query($link, $query) or die(mysqli_error($link));


// Обновление записей через SQL запрос в PHP
// Изменять записи можно с помощью команды UPDATE.
// $query = "UPDATE таблица SET полe = значениe WHERE условие";

// Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
$query = "UPDATE users SET age = 23 WHERE id >= 2 AND id <= 5";
// Нужно выполнить этот запрос через mysqli_query
// mysqli_query($link, $query) or die(mysqli_error($link));


// С помощью команды DELETE можно удалять записи из таблицы.
// $query = "DELETE FROM таблица WHERE условие";

// Удалите всех юзеров, у которых возраст 23 года.
$query = "DELETE FROM users WHERE age = 23";
// Нужно выполнить этот запрос через mysqli_query
// mysqli_query($link, $query) or die(mysqli_error($link));


// С помощью команды ORDER BY можно сортировать строки результата.
// $query = "SELECT поля FROM таблица WHERE условие ORDER BY поле сортировки";

// Достаньте юзеров с зарплатой 700 и отсортируйте их по возрасту (возрастанию)
$query = "SELECT * FROM users WHERE salary = 700 ORDER BY age";
dataOutput($link, $query);
echo '<br>';

// Достаньте всех юзеров и отсортируйте их по убыванию зарплаты.
$query = "SELECT * FROM users ORDER BY salary DESC";
dataOutput($link, $query);
echo '<br>';

// Выберем всех юзеров и отсортируем их сначала по возрастанию возраста, а юзеров с одинаковыми возрастами отсортируем по возрастанию зарплаты
$query = "SELECT * FROM users ORDER BY age, salary";
dataOutput($link, $query);
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// С помощью команды LIMIT мы можем ограничить количество строк в результате.
// $query = "SELECT поля FROM таблица WHERE условие ORDER BY поле сортировки LIMIT кол-во записей";

// Выберем всех юзеров с зарплатой 500, а затем с помощью LIMIT возьмем только первых двух из выбранных
$query = "SELECT * FROM users WHERE salary=500 LIMIT 2";
dataOutput($link, $query);
echo '<br>';

// С помощью LIMIT можно выбрать несколько строк из середины результата. В примере ниже мы выберем со второй строки (нумерация строк с нуля), 5 штук
$query = "SELECT * FROM users LIMIT 1,5";
dataOutput($link, $query);
echo '<br>';

// Отсортируйте юзеров по убыванию зарплаты и получите первых 3 юзера из результата сортировки
$query = "SELECT * FROM users ORDER BY salary DESC LIMIT 3";
dataOutput($link, $query);
echo '<br>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// С помощью команды COUNT можно подсчитать количество строк в выборке.
// $query = "SELECT COUNT(*) FROM таблица";
// Получение количества в PHP
// Чтобы ключ COUNT(*) в этом массиве был более красивый, можно переименовать наше поле в запросе с помощью команды "as"

$query = "SELECT COUNT(*) as count FROM users";

// -------------------------------------------------
// Код для проверки и отладки запросов - начало
// -------------------------------------------------
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$data = mysqli_fetch_assoc($result);
print_r($data); // ['count' => 6]
// -------------------------------------------------
// Код для проверки и отладки запросов - конец
// -------------------------------------------------

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


// Логический порядок обработки инструкции SELECT:

// 1. FROM
// 2. ON
// 3. JOIN
// 4. WHERE
// 5. GROUP BY
// 6. WITH CUBE или WITH ROLLUP
// 7. HAVING
// 8. SELECT
// 9. DISTINCT
// 10. ORDER BY
// 11. TOP
// 12. LIMIT
