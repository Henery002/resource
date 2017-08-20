<?php

include './php/autoload/Autoload.php';

use \lib\Sort;

$array = [1, 9, 8, 13, 19, 5, 1994, 1993];

print_r($array);

// 冒泡
var_dump(Sort::bubble($array));

// 快排
var_dump(Sort::quick($array));

// 插入
var_dump(Sort::insert($array));

// 选择
var_dump(Sort::select($array));