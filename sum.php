<?php

function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);


$str = "<h1>strip_tags関数</h1>"
       ."<p>タグ取り除くよ！</p>";
       echo strip_tags($str)."\n";
       
       $members=array("一郎","二郎","三郎");
            array_push($members,"四郎","五郎");
            print_r($members);
            
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

$array = array_merge($array1, $array2, $array3);

print_r($array);



echo '現在のUnixタイムスタンプ：'.time();
 
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;



date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") . "\n"; 
echo date("Y/m/01") . "\n"; 
echo date("Y/m/t") . "\n"; 

$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");

echo date("Y/m/d") . "($week_name[$w])\n"; 


echo "yura";
?>

