<?php

/*
+---+
| 1 |
+---+
Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/

/*
Call the function.
*/


function greeting(){
    echo "<p>Welcome to the well structured code.</p>";
}
greeting();

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/

/*
Call the function with the values for paremeters.
*/


function calculateArithmeticMean($a,$b,$c){
    $mean = ($a+$b+$c)/3;
    echo $mean;
}

calculateArithmeticMean(1,2,3);

echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/
/*
Declare the variable total
and assign it with the value 
that calculateTotalPrice outputs 
when it is called (with the value for price parameter).
*/

/*
Print total.
*/
function calculateTotalPrice($price){
    $SubTotal = $price + ($price * 0.13);
    echo $SubTotal;
}

calculateTotalPrice(5);

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare the global variable length and assign it with the value 12.
Declare the global variable width and assign it with the value 6.

Declare the function named calculateRectangleArea. 

This function calculates and prints the area of rectangle based on the 
global variables length and width.

Make these variables accessible inside the local scope, and do the calculation and printing
*/

$length = 12;
$width = 6;
function calculateRectangleArea($length, $width){
	global $length, $width,$AREA;

    //$GLOBALS['AREA'] = $GLOBALS['length'] * $GLOBALS['width'];
    $AREA = $length * $width;
    
}
calculateRectangleArea (12,6);
echo $AREA;
/*
Call the function.
*/


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
If the function for calculating the area of a triangle looks like this:
*/
// function calculateTriangleArea($base, $height) {
//     $area =  ($base * $height) / 2;
// }

/*
What can you do to make the $area accessible in global scope 
(without using the return statement)?
*/

function calculateTriangleArea($base,  $height) {

    global $area;
    $area = ($base * $height) / 2;
}

calculateTriangleArea(5,2);

echo $area;

/*
Choose the values for parameters and call the function.
*/








?>