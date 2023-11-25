Примеры решения задач


Задача
Задача. Выберите из таблицы workers записи с id равным 3, 5, 6, 10.

Решение:

SELECT * FROM workers WHERE id IN(3,5,6,10)


Задача
Задача. Выберите из таблицы workers записи с id равным 3, 5, 6, 10 и логином, равным 'eee', 'zzz' или 'ggg'.

Решение:

SELECT * FROM workers WHERE id IN(3,5,6,10) AND login IN("eee", "zzz", "ggg")


Задача
Задача. Выберите из таблицы workers записи c зарплатой от 500 до 1500.

Решение:

SELECT * FROM workers WHERE price BETWEEN 500 AND 1500


Задача
Задача. Выберите из таблицы workers все записи так, чтобы вместо id было workersId, вместо login – workersLogin, вместо salary - workersSalary.

Решение:

SELECT id AS userId, login AS userLogin, salary AS userSalary FROM workers


Задача
Задача. Найдите в таблице workers минимальный возраст.

Решение:

SELECT MIN(age) FROM workers


Задача
Задача. Найдите в таблице workers суммарный возраст.

Решение:

SELECT SUM(age) FROM workers


Задача
Задача. Вставьте в таблицу workers запись с полем date с текущим моментом времени в формате 'год-месяц-день часы:минуты:секунды'.

Решение:

INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW())


Задача
Задача. Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'.

Решение:

INSERT INTO workers ('name', 'date') VALUES ( 'Маша', CURDATE())


Задача
Задача. При выборке из таблицы workers запишите день, месяц и год в отдельные поля.

Решение:

SELECT EXTRACT(DAY FROM date) AS day,
EXTRACT(MONTH FROM date) AS month,
EXTRACT(YEAR FROM date) AS year
FROM workers


Задача
Задача. Выберите из таблицы workers записи, в которых минуты больше секунд.

Решение:

SELECT * FROM workers WHERE HOUR(date) > SECOND(date)


Задача
Задача. При выборке из таблицы workers прибавьте к дате 1 год.

Решение:

SELECT DATE_ADD(date, INTERVAL 1 YEAR) as date FROM workers
Или:

SELECT date + INTERVAL 1 YEAR as date FROM workers


Задача
Задача. При выборке из таблицы workers отнимите от даты 1 год.

Решение:

SELECT DATE_ADD(date, INTERVAL - 1 YEAR) as date FROM workers
Или:

SELECT date - INTERVAL 1 YEAR as date FROM workers


Задача
Задача. При выборке из таблицы workers прибавьте к дате 3 года, 4 месяца.

Решение:

SELECT DATE_ADD(date, INTERVAL "3:4" YEAR_MONTH) as date FROM workers
Или:

SELECT date + INTERVAL 3 YEAR + INTERVAL 4 MONTH as date FROM workers


Задача
Задача. При выборке из таблицы workers прибавьте к дате 4 дня, 3 часа, 2 минуты, 1 секунду.

Решение:

SELECT DATE_SUB(date, INTERVAL "4 3:2:1" DAY_SECOND) FROM workers


Задача
Задача. При выборке из таблицы workers прибавьте к дате 3 дня и отнимите 2 часа.

Решение:

SELECT date + INTERVAL 3 DAY - INTERVAL 2 HOUR FROM workers


Задачи для решения
Во всех задачах ниже считайте, что таблица workers имеет поля id, login, salary, age, date, description (и другие при необходимости).


На IN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: IN.


Выберите из таблицы workers записи с id равным 1, 2, 3, 5, 14. Скрыть решение.

Решение:

SELECT * FROM workers WHERE id IN(1,2,3,5,14)


Выберите из таблицы workers записи с login равным 'eee', 'bbb', 'zzz'. Скрыть решение.

Решение:

SELECT * FROM workers WHERE  login IN("eee", "bbb", "zzz")


Выберите из таблицы workers записи с id равным 1, 2, 3, 7, 9, и логином, равным 'user', 'admin', 'ivan' и зарплатой больше 300. Скрыть решение.

Решение:

SELECT * FROM workers WHERE id IN(1,2,3,7,9) AND login IN("user", "admin", "ivan") AND price>300


На BETWEEN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: BETWEEN.


Выберите из таблицы workers записи c зарплатой от 100 до 1000. Скрыть решение.

Решение:

SELECT * FROM workers WHERE salary BETWEEN 100 AND 1500


Выберите из таблицы workers записи c id от 3 до 10 и зарплатой от 300 до 500. Скрыть решение.

Решение:

SELECT * FROM workers WHERE id BETWEEN 3 AND 10 AND salary BETWEEN 100 AND 500


На AS
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AS.


Выберите из таблицы workers все записи так, чтобы вместо id было userId, вместо login – userLogin, вместо salary - userSalary. Скрыть решение.

Решение:

SELECT id AS userId, login AS userLogin, salary AS userSalary FROM workers
На DISTINCT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: DISTINCT.


Выберите из таблицы workers все записи так, чтобы туда попали только записи с разной зарплатой (без дублей). Скрыть решение.

Решение:

SELECT DISTINCT salary FROM workers
Получите SQL запросом все возрасты без дублирования. Скрыть решение.

Решение:

SELECT DISTINCT age FROM workers


На MIN и MAX
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: MIN, MAX.


Найдите в таблице workers минимальную зарплату. Скрыть решение.

Решение:

SELECT MIN(salary) FROM workers


Найдите в таблице workers максимальную зарплату. Скрыть решение.

Решение:

SELECT MAX(salary) FROM workers


На SUM
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: SUM.


Найдите в таблице workers суммарную зарплату. Скрыть решение.

Решение:

SELECT SUM(salary) FROM workers


Найдите в таблице workers суммарную зарплату для людей в возрасте от 21 до 25. Скрыть решение.

Решение:

SELECT SUM(salary) FROM workers WHERE age BETWEEN 21 AND 25


Найдите в таблице workers суммарную зарплату для id, равного 1, 2, 3 и 5. Скрыть решение.

Решение:

SELECT SUM(salary) FROM workers WHERE id IN(1,2,3,5)


На AVG
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: AVG.


Найдите в таблице workers среднюю зарплату. Скрыть решение.

Решение:

SELECT AVG(salary) FROM workers


Найдите в таблице workers средний возраст. Скрыть решение.

Решение:

SELECT AVG(age) FROM workers


На NOW, CURRENT_DATE, CURRENT_TIME
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: NOW, CURRENT_DATE, CURRENT_TIME.


Выберите из таблицы workers все записи, у которых дата больше текущей. Скрыть решение.

Решение:

SELECT * FROM workers WHERE date>CURRENT_DATE()


Вставьте в таблицу workers запись с полем date с текущим моментом времени в формате 'год-месяц-день часы:минуты:секунды'. Скрыть решение.

Решение:

INSERT INTO workers ('name', 'date') VALUES ('Вася', NOW())


Вставьте в таблицу workers запись с полем date с текущей датой в формате 'год-месяц-день'. Скрыть решение.

Решение:

INSERT INTO workers ('name', 'date') VALUES ('Петя', CURDATE())


Вставьте в таблицу workers запись с полем time с текущим моментом времени в формате 'часы:минуты:секунды'. Скрыть решение.

Решение:

INSERT INTO workers ('name', 'time') VALUES ('Коля', CURTIME())


На работу с частью даты
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: SECOND, MINUTE, HOUR, DAY, MONTH, YEAR, DAYOFWEEK, WEEKDAY.


Выберите из таблицы workers все записи за 2016 год. Скрыть решение.

Решение:

SELECT * FROM workers WHERE YEAR(date) = 2016


Выберите из таблицы workers все записи за март любого года. Скрыть решение.

Решение:

SELECT * FROM workers WHERE MONTH(date) = 3


Выберите из таблицы workers все записи за третий день месяца. Скрыть решение.

Решение:

SELECT * FROM workers WHERE DAY(date) = 3


Выберите из таблицы workers все записи за пятый день апреля любого года. Скрыть решение.

Решение:

SELECT * FROM workers WHERE MONTH(date) = 4 AND DAY(date) = 5


Выберите из таблицы workers все записи за следующие дни любого месяца: 1, 7, 11, 12, 15, 19, 21, 29. Скрыть решение.

Решение:

SELECT * FROM workers WHERE DAY(date) IN(1,7,11,12,15,19,21,29)


Выберите из таблицы workers все записи за вторник. Скрыть решение.

Решение:

SELECT * FROM workers WHERE DAYOFWEEK(date)= 3


Выберите из таблицы workers все записи за первую декаду любого месяца 2016 года. Скрыть решение.

Решение:

SELECT * FROM workers WHERE DAY(date) <= 10 AND YEAR(date)= 2016


Выберите из таблицы workers все записи, в которых день меньше месяца. Скрыть решение.

Решение:

SELECT * FROM workers WHERE DAY(date) < MONTH(date)


При выборке из таблицы workers запишите день, месяц и год в отдельные поля. Скрыть решение.

Решение:

SELECT DAY(date) AS day, MONTH(date) AS month, YEAR(date) AS year FROM workers


При выборке из таблицы workers создайте новое поле today, в котором будет номер текущего дня недели. Скрыть решение.

Решение:

SELECT WEEKDAY(NOW()) as today FROM workers;


На EXTRACT, DATE
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: EXTRACT, DATE.


При выборке из таблицы workers запишите год, месяц и день в отдельные поля с помощью EXTRACT. Скрыть решение.

Решение:

SELECT EXTRACT(YEAR FROM date) AS year,
EXTRACT(MONTH FROM date) AS month,
EXTRACT(DAY FROM date) AS day
FROM workers


При выборке из таблицы workers запишите день, месяц и год в отдельное поле с помощью DATE в формате 'год-месяц-день'. Скрыть решение.

Решение:

SELECT DATE(date) FROM workers


На DATE_FORMAT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: DATE_FORMAT.


При выборке из таблицы workers выведите дату в формате '31.12.2025'. Скрыть решение.

Решение:

SELECT DATE_FORMAT(date, '%d.%m.%Y') FROM workers


При выборке из таблицы workers выведите дату в формате '2025% 31.12'. Скрыть решение.

Решение:

SELECT DATE_FORMAT(date, '%Y%% %m.%d') FROM workers


На INTERVAL, DATE_ADD, DATE_SUB
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: INTERVAL, DATE_ADD, DATE_SUB.


При выборке из таблицы workers прибавьте к дате 1 день. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL 1 DAY) FROM workers


При выборке из таблицы workers отнимите от даты 1 день. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL -1 DAY) FROM workers


При выборке из таблицы workers прибавьте к дате 1 день, 2 часа. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL "1:2" DAY_HOUR) FROM workers


При выборке из таблицы workers прибавьте к дате 1 год, 2 месяца. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL "1:2" YEAR_MONTH) FROM workers


При выборке из таблицы workers прибавьте к дате 1 день, 2 часа, 3 минуты. Скрыть решение.

Решение:

SELECT DATE_SUB(date, INTERVAL "1:2:3" DAY_SECOND) FROM workers


При выборке из таблицы workers прибавьте к дате 1 день, 2 часа, 3 минуты, 5 секунд. Скрыть решение.

Решение:

SELECT DATE_SUB(date, INTERVAL "1 2:3:5" DAY_SECOND) FROM workers


При выборке из таблицы workers прибавьте к дате 2 часа, 3 минуты, 5 секунд. Скрыть решение.

Решение:

SELECT DATE_SUB(date, INTERVAL "2:3:5" HOUR_SECOND) FROM workers WHERE


При выборке из таблицы workers прибавьте к дате 1 день и отнимите 2 часа. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL 1:-2 DAY_HOUR) FROM workers


При выборке из таблицы workers прибавьте к дате 1 день и отнимите 2 часа, 3 минуты. Скрыть решение.

Решение:

SELECT DATE_ADD(date, INTERVAL 1 -2 -3 DAY_MINUTE) FROM workers


На математические операции


При выборке из таблицы workers создайте новое поле res, в котором будет число 3. Скрыть решение.

Решение:

SELECT 3 AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будет строка 'eee'. Скрыть решение.

Решение:

SELECT "eee" AS res FROM workers


При выборке из таблицы workers создайте новое поле 3, в котором будет число 3. Скрыть решение.

Решение:

SELECT 3 FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будет лежать сумма зарплаты и возраста. Скрыть решение.

Решение:

SELECT SUM(age) AND SUM(salary) AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будет лежать разность зарплаты и возраста. Скрыть решение.

Решение:

SELECT (salary - age) AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будет лежать произведение зарплаты и возраста. Скрыть решение.

Решение:

SELECT (salary * age) AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будет лежать среднее арифметическое зарплаты и возраста. Скрыть решение.

Решение:

SELECT ((salary * age)/2) AS res FROM workers


Выберите из таблицы workers все записи, в которых сумма дня и месяца меньше 10-ти. Скрыть решение.

Решение:

SELECT (MONTH(date) + DAY(date)) FROM workers


На LEFT, RIGHT, SUBSTRING
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: LEFT, RIGHT, SUBSTRING.


При выборке из таблицы workers получите первые 5 символов поля description. Скрыть решение.

Решение:

SELECT LEFT(description, 5) FROM workers


При выборке из таблицы workers получите последние 5 символов поля description. Скрыть решение.

Решение:

SELECT RIGHT(description, 5) FROM workers


При выборке из таблицы workers получите из поля description символы со второго по десятый. Скрыть решение.

Решение:

SELECT SUBSTRING(description, 2,10) FROM workers


На UNION
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: UNION.


Даны две таблицы: таблица category и таблица sub_category с полями id и name. Достаньте одним запросом названия категорий и подкатегорий. Скрыть решение.

Решение:

SELECT id, name FROM workers UNION SELECT id, name FROM sub_category


На CONCAT, CONCAT_WS
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: CONCAT, CONCAT_WS.


При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст (слитно). Скрыть решение.

Решение:

SELECT CONCAT(salary, age) AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст (слитно), а после возраста будут идти три знака '!'. Скрыть решение.

Решение:

SELECT CONCAT(salary, age, '!!!') AS res FROM workers


При выборке из таблицы workers создайте новое поле res, в котором будут лежать одновременно зарплата и возраст через дефис. Скрыть решение.

Решение:

SELECT CONCAT_WS('-', salary, age) AS res FROM workers


При выборке из таблицы workers получите первые 5 символов логина и добавьте троеточие. Скрыть решение.

Решение:

SELECT CONCAT (LEFT(login, 5), '...') AS log FROM workers;


На GROUP BY
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: GROUP BY.


Найдите самые маленькие зарплаты по группам возрастов (для каждого возраста свою минимальную зарплату). Скрыть решение.

Решение:

SELECT MIN(salary), MAX(salary) FROM workers GROUP BY age


Найдите самый большой возраст по группам зарплат (для каждой зарплаты свой максимальный возраст). Скрыть решение.

Решение:

SELECT MAX(age) FROM workers GROUP BY salary ;


На GROUP_CONCAT
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: GROUP_CONCAT.


Выберите из таблицы workers уникальные возраста так, чтобы для каждого возраста было поле res, в котором будут лежать через дефис id записей с таким возрастом. Скрыть решение.

Решение:

SELECT  DISTINCT age AS res (SELECT GROUP_CONCAT( id SEPARATOR '-') ) FROM workers


На подзапросы


Выберите из таблицы workers все записи, зарплата в которых больше средней зарплаты. Скрыть решение.

Решение:

SELECT * FROM workers WHERE salary >(SELECT AVG(salary) FROM workers)


Выберите из таблицы workers все записи, возраст в которых меньше среднего возраста, деленного на 2 и умноженного на 3. Скрыть решение.

Решение:

SELECT * FROM workers WHERE age < (SELECT AVG(age)/2*3 FROM workers)


Выберите из таблицы workers записи с минимальной зарплатой. Скрыть решение.

Решение:

SELECT * FROM workers WHERE salary = (SELECT MIN(salary) FROM workers)


Выберите из таблицы workers записи с максимальной зарплатой. Скрыть решение.

Решение:

SELECT * FROM workers WHERE salary = (SELECT MAX(salary) FROM workers)


При выборке из таблицы workers создайте новое поле max, в котором будет лежать максимальное значение зарплаты для возраста 25 лет. Скрыть решение.

Решение:

SELECT MAX(salary) AS max FROM workers WHERE age = 25 !!!!!!


При выборке из таблицы workers создайте новое поле avg, в котором будет лежать деленная на 2 разница между максимальным значением возраста и минимальным значением возраста в во всей таблице. Скрыть решение.

Решение:

SELECT (SELECT (MAX(age) - MIN(age))/2 FROM workers) AS avg


При выборке из таблицы workers создайте новое поле avg, в котором будет лежать деленная на 2 разница между максимальным значением зарплаты и минимальным значением зарплаты для возраста 25 лет. Скрыть решение.

Решение:

SELECT (SELECT (MAX(age) - MIN(age))/2 FROM workers ) AS avg FROM workers WHERE age = 25


На JOIN
Для решения задач данного блока вам понадобятся следующие SQL команды и функции: JOIN.


Даны две таблицы: таблица category с полями id и name и таблица page с полями id, name и category_id. Достаньте одним запросом все страницы вместе с их категориями. Скрыть решение.

Решение:

SELECT * FROM page LEFT JOIN category ON  page.category_id = category.id


Даны 3 таблицы: таблица category с полями id и name, таблица sub_category с полями id и name и таблица page с полями id, name и sub_category_id. Достаньте одним запросом все страницы вместе с их подкатегориями и категориями. Скрыть решение.

Решение:

SELECT * FROM page LEFT JOIN category ON page.category_id = category.id
LEFT JOIN sub_category ON  category.id = sub_category.category_id


На работу с полями
Задачи данного блока следует решать SQL запросами, а не через PhpMyAdmin.


Создайте базы данных test1 и test2. Скрыть решение.

Решение:

CREATE DATABASE test1
CREATE DATABASE test2


Удалите базу данных test2. Скрыть решение.

Решение:

DROP DATABASE test2


Создайте в базе данных test1 таблицы table1 и table2 с полями id, login, salary, age, date. Скрыть решение.

Решение:

CREATE TABLE table1(
id INT(1),
login VARCHAR(255),
salary INT(6),
age INT(6),
date DATE NOT NULL
primary key (Id)
);
CREATE TABLE table2(
id INT(1),
login VARCHAR(255),
salary INT(6),
age INT(6),
date DATE NOT NULL
primary key (Id)
);


Переименуйте таблицу table2 в table3. Скрыть решение.

Решение:

RENAME TABLE table2 TO table3


Удалите таблицу table3. Скрыть решение.

Решение:

DROP TABLE table3


Добавьте в таблицу table1 поле status. Скрыть решение.

Решение:

ALTER TABLE table1 ALTER COLUMN status


Удалите из таблицы table1 поле age. Скрыть решение.

Решение:

ALTER TABLE table1 DROP COLUMN age


Переименуйте поле login на user_login. Скрыть решение.

Решение:

RENAME COLUMN login TO user_login


Смените типа поля salary с int на varchar(255). Скрыть решение.

Решение:

ALTER TABLE table1 CHANGE salary salary VARCHAR(255)


Очистите таблицу table1. Скрыть решение.

Решение:

DELETE FROM table1


Очистите все таблицы базы данных test1. Скрыть решение.

Решение:

TRUNCATE test1
