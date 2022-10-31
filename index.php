<?php

$arr1 = [
    ['UID' => 4654, 'login' => 'user1'],
    ['UID' => 4622, 'login' => 'user2'],
    ['UID' => 4634, 'login' => 'user3'],
    ['UID' => 4656, 'login' => 'user4'],
    ['UID' => 1459, 'login' => 'user5'],
];

$arr2 = [
    ['UID' => 4654, 'shows' => 1],
    ['UID' => 4622, 'shows' => 55],
    ['UID' => 4634, 'shows' => 3],
    ['UID' => 4656, 'shows' => 97],
    ['UID' => 1459, 'shows' => 45],
];

$arr_result = array_map('array_merge', $arr1, $arr2);

usort($arr_result, function($first_number, $second_number) {
    return ($second_number['shows'] - $first_number['shows']);
});

var_dump($arr_result);