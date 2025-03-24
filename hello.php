<?php

// fscanf(STDIN, "%d", $num);

// if($num == 0){
//     print("This is Zero number");
// }elseif($num<0){
//     print("This is negative number");
// }
// elseif($num % 2 == 0){
//     print("$num is an even number.");
// }else{
//     print("$num is an odd number.");
// }

// fscanf(STDIN, '%d', $num);
// $sum = 0;

// for($i = 0; $i<=$num; $i++){
//     $sum+= $i;
// }
// print($sum);

// fscanf(STDIN, "%d  %d  %d", $num1, $num2, $num3);
// $average = ($num1 + $num2 + $num3)/3;
// printf("Average: "."%.2f",$average);

fscanf(STDIN, "%d %d", $a, $b);
printf("Before swapping: num1 = $a, num2 = $b\n");
$temp = $a;
$a = $b;
$b = $temp;
printf("Before swapping: num1 = $a, num2 = $b");


