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


echo "<br>";
echo "<br>";
echo "<br>";

?>

<!DOCTYPE html>
<html lang="">
<head>
    <title>title</title>
</head>
<body>
<?php include 'elem/header.php' ?>

<?php include 'elem/sidebar.php' ?>

<main>
    content
</main>
<br>
<?php include 'elem/footer.php' ?>
</body>
</html>
