<?php
//-------------------------TASK 1--------------------------------------
/* 
Declare variable $fname_arr and assign 
it with array gotten from $fname_str; 
*/
$fname_str = "John, Jenna, Harry, Don";
$fname_arr = (explode(",", $fname_str));

/* 
Declare variable $lname_arr and assign 
it with array gotten from $lname_str; 
*/
$lname_str = "Smith, Cores, Zab, Willson";
$lname_arr = (explode(",", $lname_str));


/* 
Declare variable $age_arr and assign 
it with array gotten from $age_str; 
*/
$age_str = "15, 25, 35, 45";
$age_arr = (explode(",", $age_str));


//-------TASK 2--------------------------------------------------------------
//Use while-loop to print out all array elements of each array from task 1. Every array element needs to be printed in a new line.

$arrlength = sizeof($fname_arr);
$i = 0;
while ($i < $arrlength) {
	echo $fname_arr[$i]."<br>".$lname_arr[$i]."<br>".$age_arr[$i]."<br>";
	// echo $lname_arr[$i]."<br>";
	// echo $age_arr[$i]."<br>";
	$i += 1;
};

echo "<br>";

//--------------------------TASK 3 -------------------------------------------
//Concatenate the array values from arrays in task 1 and string literals needed to form the following sentence: Jenna Cores is 25. Print the concatenated expression.
$arrlength = sizeof($fname_arr);
$i = 0;
while ($i < $arrlength) {
	echo $fname_arr[$i]." ".$lname_arr[$i]." is ".$age_arr[$i]."."."<br>";
	$i +=1;
}
echo "<br>";

//---------------------TASK 4-----------------------------------------------------
//Use while-loop to add up all array elements of the array $age_arr.

//You will need to declare another variable ($sum for example) and assign it with initial value 0. Append the value of each array element (inside the loop) to your variable $sum using += operator. All of this (looping and adding value in the fly) can be replaced with array_sum( ).



$arrlength = sizeof($age_arr);
$i = 0;
$sum = 0;

while ($i < $arrlength){
	 $sum += $age_arr[$i];

	$i+= 1;
}

echo $sum;
echo "<br>";


//Finally, use concatenation to form and print the following sentence: The sum of all array elements is....
echo "<br>";
echo "The sum of all array elements is".array_sum($age_arr).".";




?>