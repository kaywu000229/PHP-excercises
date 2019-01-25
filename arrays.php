<?php 

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/


$favFood = [ "shrimp sushi",
				 "green-pepper", 
				 "fries", 
				 "orange",
				 "chocolate",
				 "lettuce"];


foreach($favFood as $value){
	echo $value. " ";
}

// echo "<pre>";
// print_r($favFood);
// echo "</pre>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

$startP = 0;
echo "<ul>";
	 while($startP < sizeof($favFood)){
	 	echo"<li>
	 			{$favFood[$startP]}
	 		</li>";
	 	$startP++;
	 }
echo"</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";


/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/
$type = [
		1=>"fruits",
		"meats",
		"legumes",
		"snacks",
		"seafood"
	];

$food_assoc = [$favFood, $type];
echo "<ul>"; 
echo $food_assoc [0][0]." | ". $food_assoc [1][5];
echo "<br>";
echo $food_assoc [0][1]." | ". $food_assoc [1][3];
echo "<br>";
echo $food_assoc [0][2]." | ". $food_assoc [1][4];
echo "<br>";
echo $food_assoc [0][3]." | ". $food_assoc [1][1];
echo "<br>";
echo $food_assoc [0][4]." | ". $food_assoc [1][4];
echo "<br>";
echo $food_assoc [0][5]." | ". $food_assoc [1][3];

echo "</ul>";

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

$origin = [
    1=>"unknown",
		"north-America",
		"somewhere Europe",
		"Japan"
];

$food_assoc = [$favFood, $type, $origin];
echo "<ul>";
echo $food_assoc [0][0]." | ". $food_assoc [1][5]. " | ". $food_assoc [2][4];
echo "<br>";
echo $food_assoc [0][1]." | ". $food_assoc [1][3]. " | ". $food_assoc [2][1];
echo "<br>";
echo $food_assoc [0][2]." | ". $food_assoc [1][4] . " | ". $food_assoc [2][3];
echo "<br>";
echo $food_assoc [0][3]." | ". $food_assoc [1][1]. " | ". $food_assoc [2][1];
echo "<br>";
echo $food_assoc [0][4]." | ". $food_assoc [1][4]. " | ". $food_assoc [2][3];;
echo "<br>";
echo $food_assoc [0][5]." | ". $food_assoc [1][3]. " | ". $food_assoc [2][1];;
echo "</ul>";

    


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/


