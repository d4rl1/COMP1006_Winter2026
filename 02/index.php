//1. Set Up & Start 
<?php
//2. Code Commenting 
// inline comment

/*
block comment
*/




//3. Variables, Data Types, Concatenation, Conditional Statements & Echo

$firstName = "JohnPersona"; //string
$lastNane = "Joker"; //string
$age = 25; //integer
$isJoker = true;

echo "<p>Hello, my name is $firstName $lastNane and I am $age years old.</p>";

if ($isJoker) {
    echo "<p>I am a Joker!</p>";
}
else {
    echo "<p>I am not a Joker!</p>";
}
//4. Loosely Typed Language Demo
$num1 = 10;
$num2 = "10";

function add($num1, $num2) {
    return $num1 + $num2;
}

echo "<p>".add($num1, $num2)."</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP
?>
