<?php

function times2($num){
    return $num * 2;
}

echo times2(48);
echo "\n";

function f($a, $b){
return $a + $b;    
}

echo f(8, 9);
echo "\n";

function f3(){
    $arr = array(1,3,5,7,9);
    $result = 1;
    foreach($arr as $a){
        $result = $result * $a;
    } 
    return $result;
}

echo f3();
echo "\n";

function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(3,5,9,7));
echo "\n";

$contents = "<b>sample</b>";
$contents = strip_tags($contents);
echo $contents;

$fruits = ['mango', 'grape', 'peach'];
array_push($fruits, 'banana', 'apple');

print_r($fruits);

$items1 = ['item1', 'item2', 'item3'];
$items2 = ['item4', 'item5'];
$items3 = ['item6', 'item7'];

$item_merge = array_merge($items1, $items2, $items3);

print_r($item_merge);

print time();
echo "\n";

date_default_timezone_set('UTC');

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "\n";

echo date("l");
echo "\n";


