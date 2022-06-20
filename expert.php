<?php
declare(strict_types=1);


//Ex1

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

//Ex2

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

//Ex3

$str = “Debugged ! Also very fun”;
echo substr($str, 0, 10);

//ex4

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

//Ex5

// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter != 'z'; $letter++) {
    array_push($arr, $letter);
}
array_push($arr, 'z');

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

//Ex6

