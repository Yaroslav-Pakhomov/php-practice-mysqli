<meta charset="utf-8">
<?php
// включение вывод всех ошибок
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// выключение вывод всех ошибок
// error_reporting(0);
// ini_set('display_errors', 'off');

// Кодировка
mb_internal_encoding('UTF-8');

?>
<!--Цикл-->
<?php
for ($i = 1; $i <= 9; $i++) { ?>
    <p><?= $i ?></p>
    <?php
} ?>


<?php
for ($i = 1; $i <= 9; $i++): ?>
    <p><?= $i ?></p>
<?php
endfor; ?>

<ul>
    <?php
    for ($i = 1; $i <= 5; $i++): ?>
        <li><?= $i ?></li>
    <?php
    endfor; ?>
</ul>


<!--Массив-->
<?php
$arr = [1, 2, 3, 4, 5];
?>
<?php
foreach ($arr as $elem) { ?>
    <p><?= $elem ?></p>
    <?php
} ?>

<?php
foreach ($arr as $elem): ?>
    <p><?= $elem ?></p>
<?php
endforeach; ?>

<?php
$arr = ['user1', 'user2', 'user3'];
?>
<?php
foreach ($arr as $value): ?>
    <div>
        <h2><?= $value; ?></h2>
        <p>text</p>
    </div>
<?php
endforeach; ?>


<?php
$arr = [
    [
        'name' => 'user1',
        'age'  => 30,
    ],
    [
        'name' => 'user2',
        'age'  => 31,
    ],
    [
        'name' => 'user3',
        'age'  => 32,
    ],
];
?>

<br>
<br>
<br>

<?php foreach ($arr as $subarray): ?>
    <div>
        <?php foreach ($subarray as $key => $value): ?>
            <p><?= $key ?>: <?= $value ?></p>
        <?php endforeach; ?>
    </div>
<?php endforeach; ?>