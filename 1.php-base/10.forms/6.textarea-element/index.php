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

if (isset($_POST['textarea'])) {
    echo 'Исходный текст - ' . $_POST['test'];
    echo "<br>";
    echo 'Транслитерация текста - ' . translit($_POST['test']);
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
<form action="" method="POST">
    <label>
        <textarea name="test"><?= $_POST['test'] ?? '' ?></textarea>
    </label>
    <label for="">
        <input name="textarea" type="submit" value="Поехали!!!">
    </label>
</form>


<?php
function translit($text_for_translit): string {
    $arr_rus = [
        'а',
        'б',
        'в',
        'г',
        'д',
        'е',
        'ё',
        'ж',
        'з',
        'и',
        'й',
        'к',
        'л',
        'м',
        'н',
        'о',
        'п',
        'р',
        'с',
        'т',
        'у',
        'ф',
        'х',
        'ц',
        'ч',
        'ш',
        'щ',
        'ь',
        'ы',
        'ъ',
        'э',
        'ю',
        'я',
    ];
    $arr_lat = [
        'a',
        'b',
        'v',
        'g',
        'd',
        'e',
        'jo',
        'zh',
        'z',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'r',
        's',
        't',
        'u',
        'f',
        'h',
        'cz',
        'ch',
        'sh',
        'shh',
        '`',
        'y',
        '``',
        'e`',
        'yu',
        'ya',
    ];
    $arr_translit = array_combine($arr_rus, $arr_lat); // создаем таблицу транлитерации

    return strtr($text_for_translit, $arr_translit); // транслитерация
}

echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";


echo "<br>";
echo "<br>";
echo "<br>";

?>
