<?php
/*--------------------------Task 1------------------------------
Use while loop to echo the numbers from 0 to 30 (each number in the next line).

The first 10 numbers (0 to 10) are going to be in regular type,

The second 10 numbers (11 to 20) are going to be bolded and

the third 10 numbers (21 to 30) are going to be italic.*/

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30];
$arrlength = sizeof($arr);
$iP = 0;

while ($iP < 10) {
    echo $arr[$iP];
    echo "<br>";
    
    $iP++;
}

while (9 < $iP && $iP < 20) {
    echo "<strong>$arr[$iP]</strong>";
    echo "<br>";
    
    $iP++;
}

while (19< $iP && $iP <= 30){
    echo "<i>$arr[$iP]</i>";
    echo "<br>";
    
    $iP++;
}

echo "<hr>";

/*-----------------------TASK2------------------------------------------------
Task 2
Create array with elements: 2, 4, 7, 8, 10 and 11.

Loop through the array and divide each element by 3

Use number_format() function to format each array element to 2 decimals. Print formatted array elements (each number in the new line).

*/

$arrN = [2,4,7,8,11];

for ($i = 0; $i < sizeof($arrN); $i++){
    echo $result = ($arrN[$i])/ 3;
    echo "<br>";
    echo $forNum = number_format($result, 2);
    echo"<br>";
};


echo"<hr>";

//---------------------TASK3------------------------------------
//Classify the staff from $employee_numbers array using foreach loop.

$employee_numbers = [
   "Sam Jerry" => "1849",
   "David Flint" => "2274",
   "Lena Vincent" => "2532",
   "Robert Vanny" => "3471",
    
];


/*
If the first digit of employee number is 1, it means employee's sector is management.

If the first digit of employee number is 2, it means employee's sector is technical department.

If the first digit of employee number is 3, it means employee's sector is accounting.

Use substr() to extract the part of the array element value (employee number) that you need in your conditional statement (if-else or switch).
*/
/*You need to concatenate the expression in your foreach loop that will print the following statements in unordered list as it looks below:

Sam Jerry's employee number is: 1849 :: MANAGEMENT
David Flint's employee number is: 2274 :: TECHNICAL DEPARTMENT
Lena Vincent's employee number is: 2532 :: TECHNICAL DEPARTMENT
Robert Vanny's employee number is: 3471 :: ACCOUNTING*/


foreach ($employee_numbers as $key => $value){
    if (substr($value,0,1) == 1){
        echo "$key 's employee number is:$value:: MANAGEMENT";
        echo"<br>";
    }
    else if (substr($value,0,1) == 2){
        echo "$key 's employee number is:$value::TECHNICAL DEPARTMENT";
        echo"<br>";
    }
    else if (substr($value,0,1)== 3){
        echo "$key 's employee number is:$value::ACCOUNTING";
        echo"<br>";
    }
}


?>