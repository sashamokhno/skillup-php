
<?php
//1
/*
$arr = ['html', 'css', 'php', 'js', 'jq'];
    foreach ($arr as $elem)
    {echo $elem. PHP_EOL;
    };



//2
$arr1 = [1, 2, 3, 4, 5];
$result=0;
    foreach ($arr1 as $elem1)
    {
        $result += $elem1;
    }
    echo $result;


//3
$arr2 = [1, 2, 3, 4, 5];
$result1=0;
foreach ($arr2 as $elem2)
{
    $result1 +=$elem2*$elem2;
}
echo $result1;


*/

//4
/*
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key=>$elem)
{echo $key.' - '.$elem. PHP_EOL;
};
//5
$arr = ['Коля'=>200, 'Вася'=>300,'Петя'=>400];
foreach ($arr as $key=>$elem)
{echo $key.' - зарплата '.$elem.' долларов'. PHP_EOL;
};
//6
$i = 1;
while ($i <= 100) {
    echo $i.PHP_EOL;
    $i++;
}



for ($i = 1; $i <= 100; $i++) {
    echo $i.PHP_EOL;
}


//7
$i = 11;
while ($i <= 33) {
    echo $i.PHP_EOL;
    $i++;
}

for ($i = 11; $i <= 33; $i++) {
    echo $i.PHP_EOL;
}

//8
$i = 0;
while ($i <= 100) {
    echo $i.PHP_EOL;
    $i+=2;
}

for ($i = 0; $i <= 100; $i+=2) {
    echo $i.PHP_EOL;
}

//9
$sum=0;
    for($i=1;$i<=100;$i++){
        $sum+=$i;
    }
echo $sum.PHP_EOL;

$sum=0;
$i=1;
while ($i<=100){
    $sum+=$i;
    $i++;
}
echo $sum.PHP_EOL;


//10
	$arr = [2, 5, 9, 15, 0, 4];
	foreach ($arr as $elem) {
        if ($elem > 3 && $elem < 10) {
            echo $elem.PHP_EOL;
        }
    }
//11
$arr = [2, -5, 9, -15, 0, -4];
$sum=0;
    foreach ($arr as $elem) {
         if ($elem > 0){
             $sum+=$elem;
         }
}
echo $sum.PHP_EOL;
//12
$arr=[1, 2, 5, 9, 4, 13, 4, 10];
    foreach ($arr as $elem) {
        if ($elem == 4){
            echo 'Есть'.PHP_EOL;
            break;
    }
    }

//13
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem) {
    if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5') {
        echo $elem.PHP_EOL;
    }
}
//14
$arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
$str='';
foreach ($arr as $elem) {
    $str .='-'. $elem;
    }
echo $str.'-';



//15
	$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
	foreach ($arr as $key=>$elem) {
        if ($key == 5 or $key == 6) {
            echo '<b>'.$elem.'</b>'.PHP_EOL;
        } else {
            echo $elem.PHP_EOL;
        }
    }
?>

//16
$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 1;
    foreach ($arr as $key=>$elem) {
        if ($key == $day) {
            echo '<i>'.$elem.'</i>'.PHP_EOL;;
            } else {
            echo $elem.PHP_EOL;
}
}

//17
$arr = [];
for ($i = 1; $i <= 100; $i++) {
$arr[] = $i;
}

var_dump($arr);

//18
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
$en[] = $key;
$ru[] = $elem;
}
var_dump($en);
var_dump($ru);
//19
    $num=1000;
    $iter=0;
    while ($num > 50) {
            $num=$num/2;
            $iter++;
}
echo $num.PHP_EOL;
echo $iter;
*/
for($num=1000, $i=0; $num>50; $num=$num/2 , $i++);
echo $num.PHP_EOL;
echo $i;
