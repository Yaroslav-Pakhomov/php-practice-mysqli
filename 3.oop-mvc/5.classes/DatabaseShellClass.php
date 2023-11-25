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


class DatabaseShellClass {

    private false|mysqli $link;

    public function __construct(string $host, string $user, string $password, string $database) {
        $this->link = mysqli_connect($host, $user, $password, $database);
        mysqli_query($this->link, "SET NAMES 'utf8'");
    }

    /**
     * Сохраняет запись в базу
     *
     * @param string $table
     * @param array $data
     *
     * @return void
     */
    public function save(string $table, array $data): void {

        //        $query = '';
        $query_fields = '';

        foreach ($data as $field => $value) {
            if (!$query_fields) {
                $query_fields .= " " . $field . "='" . $value . "'";
            } else {
                $query_fields .= ", " . $field . "='" . $value . "'";
            }
        }

        // Сформируем запрос на вставку данных
        $query = "INSERT INTO  " . $table . " SET " . $query_fields;

        // Выполним этот запрос
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    /**
     * Удаляет запись по ее id
     *
     * @param string $table
     * @param int $id
     *
     * @return void
     */
    public function del(string $table, int $id): void {
        // Сформируем запрос на удаление
        $query = "DELETE FROM " . $table . " WHERE id=$id";

        // Удалим запись из базы данных
        mysqli_query($this->link, $query) or die(mysqli_error($this->link));
    }

    /**
     * Удаляет записи по их id
     *
     * @param string $table
     * @param array $ids
     *
     * @return void
     */
    public function delAll(string $table, array $ids): void {

        foreach ($ids as $id) {
            $this->del($table, (int)$id);
        }
    }

    /**
     * Получает одну запись по ее id
     *
     * @param string $table
     * @param int $id
     *
     * @return array|false|null
     */
    public function get(string $table, int $id): array|false|null {
        // Сформируем запрос на получение этого юзера
        $query = "SELECT * FROM " . $table . " WHERE id=$id";
        // echo $query;


        // Выполним запрос
        $result = mysqli_query($this->link, $query) or die(mysqli_error($this->link));

        // Запишем данные юзера в переменную
        return mysqli_fetch_assoc($result);
    }

    /**
     * Получает массив записей по их id
     *
     * @param string $table
     * @param array|string $ids
     *
     * @return array
     */
    public function getAll(string $table, array|string $ids): array {
        $records = [];

        if (is_array($ids)) {
            foreach ($ids as $id) {
                $records[] = $this->get($table, (int)$id);
            }
        } else {

            // Сформируем запрос на вставку данных
            $query = "SELECT * FROM  " . $table . ' ' . $ids;

            $records = $this->dataOutput($this->link, $query);
        }

        return $records;
    }

    /**
     * Получает массив записей по условию
     *
     * @param string $table
     * @param array $conditions
     *
     * @return array
     */
    public function selectAll(string $table, array $conditions): array {

        //        $query = '';
        $query_fields = '';

        foreach ($conditions as $condition => $value) {
            if (!$query_fields) {
                $query_fields .= " " . $condition . "='" . $value . "'";
            } else {
                $query_fields .= "AND " . $condition . "='" . $value . "'";
            }
        }

        // Сформируем запрос на вставку данных
        $query = "SELECT * FROM  " . $table . " WHERE " . $query_fields;

        return $this->dataOutput($this->link, $query);
    }

    /**
     * Функция для проверки и отладки запросов, возвращает массив данных
     *
     * @param false|mysqli $link подключение
     * @param string $query запрос
     *
     * @return array $data массив данных
     */
    private function dataOutput(false|mysqli $link, string $query): array {
        $result = mysqli_query($link, $query) or die(mysqli_error($link));

        //        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }

        return $data;
    }
}
