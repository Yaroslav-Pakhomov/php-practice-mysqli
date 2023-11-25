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


// Введение в Интерфейсы в ООП

// ключевое слово interface вместо слова class

// вместо слова extends следует использовать ключевое слово implements

// Нельзя создать объект интерфейса. Все методы интерфейса должны быть объявлены как public и не должны иметь реализации. У интерфейса могут быть только методы, но не свойства. Нельзя также сделать интерфейс и класс с одним и тем же названием.

// Замечание
// Как уже было написано выше, не может быть интерфейса и класса с одинаковым названием. Это создает некоторые проблемы с придумыванием названий. Например, мы хотим сделать класс User, реализующий интерфейс User. Как мы видим, у нас конфликт имен. Для его разрешения, нужно или класс назвать по-другому, или интерфейс.

// Общепринято в таком случае название интерфейса начать с маленькой буквы i, чтобы показать, что это интерфейс, а не класс. То есть в нашем случае мы сделаем интерфейс iUser, а реализовывать его будет класс User. Такой подход мы иногда будем применять в следующих уроках.
