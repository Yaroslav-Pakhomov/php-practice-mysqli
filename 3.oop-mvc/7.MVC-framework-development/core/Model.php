<?php

declare(strict_types=1);

namespace Core;

use AllowDynamicProperties;
use mysqli;

/**
 * Модель
 */
#[AllowDynamicProperties] class Model {

    // Данные для подключения
    public const DB_HOST = 'localhost';                                 // имя хоста
    public const DB_USER = 'root';                                      // имя пользователя
    public const DB_PASS = 'root';                                      // пароль
    public const DB_NAME = 'db_organization';                           // имя базы данных

    /**
     * Подключение
     */
    private static mysqli|false $link;

    public function __construct() {

        // если свойство не задано, то подключаемся
        if (!self::$link) {
            $this->link = mysqli_connect(self::DB_HOST, self::DB_USER, self::DB_PASS, self::DB_NAME);
            mysqli_query($this->link, "SET NAMES 'utf8'");
        }
    }


    protected function findOne($query) {
        $result = mysqli_query(self::$link, $query) or die(mysqli_error(self::$link));
        return mysqli_fetch_assoc($result);
    }

    protected function findMany($query) {
        $result = mysqli_query(self::$link, $query) or die(mysqli_error(self::$link));
        //        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }
}
