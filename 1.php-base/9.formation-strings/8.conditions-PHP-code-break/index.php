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

<!--Блок if-->
<?php
$test = true;
if ($test) {
    echo '<p>text</p>';
}
?>

<?php
if ($test) { ?>
    <p>text</p>
    <?php
} ?>

<?php
if ($test): ?>
    <p>text</p>
<?php
endif; ?>

<?php
$show = true;
?>

<?php
if ($show): ?>
    <div>
        <p>text1</p>
        <p>text2</p>
        <p>text3</p>
    </div>
<?php
endif; ?>

<!--Блок else-->
<?php
if ($test) { ?>
    <p>+++</p>
    <?php
} else { ?>
    <p>---</p>
    <?php
} ?>

<?php
if ($test): ?>
    <p>+++</p>
<?php
else: ?>
    <p>---</p>
<?php
endif; ?>


<?php
$show = false;
?>
<?php
if ($show): ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php
else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php
endif; ?>

<!--Блок elseif-->
<?php
$test1 = 1; ?>

<?php
if ($test1 === 1) { ?>
    <p>1</p>
    <?php
} elseif ($test1 === 2) { ?>
    <p>2</p>
    <?php
} else { ?>
    <p>?</p>
    <?php
} ?>

<?php
$test1 = 2; ?>
<?php
if ($test1 === 1): ?>
    <p>1</p>
<?php
elseif ($test1 === 2): ?>
    <p>2</p>
<?php
else: ?>
    <p>?</p>
<?php
endif; ?>

<?php
$condition = 3; ?>

<?php
if ($condition === 1):
    ?>
    <div>
        <p>text1</p>
        <p>text1</p>
        <p>text1</p>
    </div>
<?php elseif ($condition === 2): ?>
    <div>
        <p>text2</p>
        <p>text2</p>
        <p>text2</p>
    </div>
<?php elseif ($condition === 3): ?>
    <div>
        <p>text+</p>
        <p>text+</p>
        <p>text+</p>
    </div>
<?php else: ?>
    <div>
        <p>text-</p>
        <p>text-</p>
        <p>text-</p>
    </div>
<?php
endif;
?>
