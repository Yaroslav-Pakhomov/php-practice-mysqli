<?php

declare(strict_types=1);

// Функция по замене ключей в ассоциативном массиве
function change_key($array, $old_key, $new_key) {

    if (!array_key_exists($old_key, $array)) {
        return $array;
    }

    $keys = array_keys($array);
    $keys[array_search($old_key, $keys, true)] = $new_key;

    return array_combine($keys, $array);
}

// Изначальный ассоциативный массив
$arrOrig = ['green' => 'avocado', 'red' => 'apple', 'yellow' => 'banana',];

echo '<pre>';
//print_r($arrOrig);
echo '</pre>';


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

// Ассоциативный массив замены старых ключей на новые
$arrKeyReplacement = ['green' => 'зелёный', 'red' => 'красный', 'yellow' => 'жёлтый',];

foreach ($arrKeyReplacement as $old_key => $new_key) {
    $arrOrig = change_key($arrOrig, $old_key, $new_key);
}

echo '<pre>';
//print_r($arrOrig);
echo '</pre>';

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$arrPrice = ['800', '300', '2000'];

function getPercent($arrPrice): array {
    $summa = getSumma($arrPrice);
    echo $summa;
    $arrPercent = [];
    foreach ($arrPrice as $price) {
        $arrPercent[] = ceil((int)$price / $summa * 100);
    }
    $arrPercent[] = 100;

    return $arrPercent;
}

function getSumma($arrPrice): int {
    $summa = 0;
    foreach ($arrPrice as $price) {
        $summa += (int)$price;
    }

    return $summa;
}


$arrPercent = getPercent($arrPrice);

$arrPrice[] = (string)getSumma($arrPrice);

echo '<pre>';
//print_r($arrPercent);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<pre>';
//print_r($arrPrice);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$arrPercentPrice = array_combine($arrPercent, $arrPrice);

echo '<pre>';
//print_r($arrPercentPrice);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo '<pre>';
//print_r($arrPercent);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$count = 0;
$number = 15;

$lastValue = 0;
$arrDiffPercent = [];
foreach ($arrPercent as $key => $percent) {
    $arrDiffPercent[] = $percent - $lastValue;
    $lastValue = $percent;
}


echo '<pre>';
//print_r($arrDiffPercent);
echo '</pre>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$string = 'Семавин Олег Николаевич';

$FIO = explode(' ', $string);

$new_string = $FIO[0] . ' ' . mb_substr($FIO[1], 0, 1) . '.' . mb_substr($FIO[2], 0, 1) . '. ';

echo $string;
echo '<br>';
echo $new_string;

echo '<pre>';
//print_r($FIO);
echo '</pre>';

// file_put_contents('C:\OpenServer\domains\test\SQL.txt', print_r($arr, true));
// file_put_contents('C:\OpenServer\domains\test\Arguments.txt', print_r($arr, true));


$input = $array = [
    ['price' => 5.30, 'currency' => 'EUR'],
    ['price' => 5.30, 'currency' => 'EUR'],
    ['price' => 8.20, 'currency' => 'EUR'],
    ['price' => 5.30, 'currency' => 'USD'],
];

$result = [];
array_map(static function ($item) use (&$result) {
    $result[$item['currency']] = isset($result[$item['currency']]) ? $result[$item['currency']] + $item['price'] : $item['price'];
}, $input);


echo '<pre>';
//print_r($result);
echo '</pre>';

// ascii code с 65 по 90 uppercase 'A' - 'Z'
function setExcelArr(int $chr, int $count): array {

    $excel_arr = [];

    $count += $chr;

    for ($i = $chr; $i <= $count; $i++) {
        if ($i > 90) {
            $count_last_letter = $i - 90;
            for ($j = 65; $j <= ($count_last_letter + 65); $j++) {
                for ($k = 65; $k <= (65 + 25); $k++) {
                    $excel_arr[] = chr($j) . chr($i);
                }
            }
        } else {
            $excel_arr[] = chr($i);
        }
    }

    return $excel_arr;
}

// ascii код буквы первого столбца записей с
$chr = 67;

$count_contracts = 50;

// $excel_arr = setExcelArr($chr, $count_contracts);
// function setExcelArr($chr, $count) {
//     $new_count =  $count - $chr;

//     $number_alphabet = floor ($new_count / 26);

//     $number_last_letters = $new_count - $number_alphabet * 26;

//     $excel_data['number_alphabet'] = $number_alphabet;
//     $excel_data['number_last_letters'] = $number_last_letters;

//     return $excel_data;
// }

echo '<br>';
echo '<br>';
echo '<br>';

// print_r($excel_arr);

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$count = 80;
$number_alphabet = floor($count / 26);
// $number_alphabet = 2;
$number_last_letters = 12;
$alphabet = [];

for ($j = 65; $j <= ($number_alphabet + 65); $j++) {
    for ($i = 65; $i <= (65 + 25); $i++) {
        $alphabet[] = chr($j) . chr($i);
    }
}

echo '<pre>';
//print_r($alphabet);
echo '</pre>';

$alphabet = range('A', 'Z');
$alphabet1 = range('A', 'Z');

$finish_alphabet = [];

foreach ($alphabet as $letter) {
    foreach ($alphabet1 as $letter1) {
        $finish_alphabet[] = $letter . $letter1;
    }
}


echo '<br>';
echo '<br>';

echo '<pre>';
//print_r($finish_alphabet);
echo '</pre>';

//echo ";
echo "<br><br>";

$arr = [
    ['date' => '2019-12-29', 'event' => 'name1'],
    ['date' => '2019-12-31', 'event' => 'name2'],
    ['date' => '2019-12-29', 'event' => 'name3'],
    ['date' => '2019-12-30', 'event' => 'name4'],
    ['date' => '2019-12-29', 'event' => 'name5'],
    ['date' => '2019-12-31', 'event' => 'name6'],
    ['date' => '2019-12-29', 'event' => 'name7'],
    ['date' => '2019-12-30', 'event' => 'name8'],
    ['date' => '2019-12-30', 'event' => 'name9'],
];
$result = [];
foreach ($arr as $k => $v) {
    $result[$v['date']][] = $v['event'];
}

echo '<pre>';
//print_r($arr);
echo '</pre>';

echo '<br>';
echo '<br>';

echo '<pre>';
//print_r($result);
echo '</pre>';

echo '<br>';
echo '<br>';
echo 'C - ' . ord('C') . PHP_EOL;
echo '<br>';
echo 'D - ' . ord('D') . PHP_EOL;
echo '<br>';
echo 'E - ' . ord('E') . PHP_EOL;
echo '<br>';
echo 'F - ' . ord('F') . PHP_EOL;
echo '<br>';
echo 'G - ' . ord('G') . PHP_EOL;
echo '<br>';
echo 'H - ' . ord('H') . PHP_EOL;
echo '<br>';
echo 'I - ' . ord('I') . PHP_EOL;
echo '<br>';
echo 'J - ' . ord('J') . PHP_EOL;
echo '<br>';
echo 'K - ' . ord('K') . PHP_EOL;
echo '<br>';
echo 'L - ' . ord('L') . PHP_EOL;
echo '<br>';
echo 'M - ' . ord('M') . PHP_EOL;
echo '<br>';
echo 'N - ' . ord('N') . PHP_EOL;
echo '<br>';
echo 'NN - ' . ord('N') . ord('N') . PHP_EOL;
echo '<br>';
echo '<br>';
echo '<br>';


echo 'CC - ' . chr(66 + 1) . chr(66 + 1) . PHP_EOL;
echo '<br>';

echo 'N - ' . chr(66 + 12) . PHP_EOL;
echo '<br>';
echo '<br>';
echo '<br>';

echo 'N - ' . chr(66 + 12) . PHP_EOL;
echo '<br>';


$arr = [
    ['plan_budget' => 68.245199912338000000000000000000, 'iddep' => 1, 'month' => 1,],
    ['plan_budget' => 162.608109796880000000000000000000, 'iddep' => 1, 'month' => 1,],
    [

        'plan_budget' => 139.310002560100000000000000000000,
        'iddep'       => 1,
        'month'       => 1,
    ],
    ['plan_budget' => 28.893150167669000000000000000000, 'iddep' => 1, 'month' => 2,],
    [

        'plan_budget' => 117.694490203120000000000000000000,
        'iddep'       => 1,
        'month'       => 2,
    ],
    ['plan_budget' => 73.179596605278000000000000000000, 'iddep' => 1, 'month' => 2,],
    ['plan_budget' => 61.640825727273000000000000000000, 'iddep' => 1, 'month' => 2,],
    ['plan_budget' => 14.104505272227000000000000000000, 'iddep' => 1, 'month' => 3,],

    [

        'plan_budget' => 56.060520000000000000000000000000,
        'iddep'       => 1,
        'month'       => 3,
    ],

    [

        'plan_budget' => 48.786463394722000000000000000000,
        'iddep'       => 1,
        'month'       => 3,
    ],

    [

        'plan_budget' => 68.245199912338000000000000000000,
        'iddep'       => 1,
        'month'       => 3,
    ],

    [

        'plan_budget' => 2.756090511748900000000000000000,
        'iddep'       => 1,
        'month'       => 3,
    ],

    [

        'plan_budget' => 3081.469029111100000000000000000000,
        'iddep'       => 1,
        'month'       => 3,
    ],


];

$iddep = 0;
$month = 0;

$summa = [];

foreach ($arr as $value) {

    if ($iddep !== $value['iddep'] || $month !== $value['month']) {
        $iddep = $value['iddep'];
        $month = $value['month'];
    }
    $summa[$value['iddep']][$value['month']] += $value['plan_budget'];
}

echo '<pre>';
//print_r($summa);
echo '</pre>';


$current_calendar_year = (int)date('Y');
$current_calendar_month = (int)date('n');
// Timestamp последнего дня текущего календарного месяца.
$timestamp_current_month_stop = strtotime($current_calendar_year . '-' . $current_calendar_month . '-' . cal_days_in_month(CAL_GREGORIAN, $current_calendar_month, $current_calendar_year) . 'T23:59:59 UTC');


echo $current_calendar_year;
echo '<br>';
echo $current_calendar_month;
echo '<br>';
echo cal_days_in_month(CAL_GREGORIAN, $current_calendar_month, $current_calendar_year);
echo '<br>';
echo '<br>';
echo '<br>';
echo $timestamp_current_month_stop;
echo '<br>';
echo '<br>';
echo '<br>';
//print_r(range('A', 'Z'));

echo '<br>';
echo '<br>';
echo '<br>';
$time = time();
echo $time;
echo '<br>';
echo '<br>';
echo date('Y-m-d H:i:s', 1573141142);
echo '<br>';
echo date('d.m.Y H:i:s');
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// echo $agreement;

echo strtotime("2022-01-01T00:00:00 UTC");


$arr_cost = [
    '1.1' => 100,
    '1.2' => 0,
    '1.2.1' => 33.3,
    '1.2.2' => 66.6,
    '1.3' => 330,
    '1.4' => 0,
    '1.5' => 0,
    '1.5.1' => 10,
    '1.5.2' => 23,
    '1.5.3' => 777,
];


$summ = 0;
$arr_cost_stage = [];

// function getSum($arr_cost) {
//     foreach($arr_cost as $stage => $cost ):

//         $arr_cost_stage[$stage] = $cost;

//         // if (count($arr) !== 0) {
//         //     $sum += getSum($arr);
//         // }
//     endforeach;

//     return $sum;
// }
