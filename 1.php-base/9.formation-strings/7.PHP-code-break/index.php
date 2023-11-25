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

<p><?php
    echo 'text'; ?></p>

<p><?= 'text' ?></p>
<!--Переменный-->
<?php
$str = 'text';
?>
<p><?php
    echo $str; ?></p>

<?php
//$str = 'text';
?>
<p><?= $str ?></p>

<?php
$str1 = 'text1';
$str2 = 'text2';
$str3 = 'text3';
?>
<p><?= $str1 ?></p>
<p><?= $str2 ?></p>
<p><?= $str3 ?></p>


<!--Массивы-->
<?php
$arr = [1, 2, 3, 4, 5];
?>
<p><?= $arr[0] ?></p>
<p><?= $arr[1] ?></p>
<p><?= $arr[2] ?></p>
<p><?= $arr[3] ?></p>
<p><?= $arr[4] ?></p>

<?php
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
?>
<?php
foreach ($arr as $key => $value) {
    ?>
    <p>Ключ: <?= $key ?>; значение: <?= $value ?>.</p>
    <?php
}
?>