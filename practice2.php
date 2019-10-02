<?php

$name = "佐藤絹子";
if ($name = "佐藤絹子"){
  echo "私はあなたの名前です。";
} else {
  echo "あなたの名前ではありません。";
}

$total = 0;
echo $total;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

$fruits = array("mango", "apple", "grapefruit", "peach", "melon");

foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";
}

$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++) {
  if($i % 5 == 0) 
    echo $i;
  }