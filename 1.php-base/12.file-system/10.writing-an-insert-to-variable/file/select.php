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

$week_days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс',];

?>

<select name="select">
    <option value="0">Выберите день недели...</option>
    <?php foreach ($week_days as $key => $day) { ?>
        <option value="<?= $key ?>"><?= $day ?></option>
    <?php } ?>
</select>
