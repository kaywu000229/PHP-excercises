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

$food_assoc = [
    "shrimp sushi"=> "sushi",
     "green-pepper"=> "legumes", 
     "fries" => "snacks", 
     "orange"=>"fruits",
     "chocolate"=>"sweets",
     "lettuce"=>"legumes"
];
    
foreach ($food_assoc as $key => $value) {
  echo "{$key} | {$value}<br>";
};
    

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

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

$food_assoc = [
    "shrimp-sushi" => [
      "type" => "sushi",
      "origin" => "Japan"
    ],
    "green-pepper" =>[
        "type" =>"legumes",
        "origin" => "unknown"
    ],
    "fries" => [
        "type" =>"snakcs",
        "origin" =>"north-America"
    ],
    "orange" => [
        "type" => "fruits",
        "origin" => "unknown"
    ],
    "chocolate" => [
      "type" => "sweets",
      "origin" => "swiss"
    ],
    "lettuce" => [
      "type" => "legumes",
      "origin" => "unknown"
    ]

];

foreach($food_assoc as $keys => $item){
    echo "{$keys}";
        foreach ($item as $itemkey => $value) {
        echo " | {$value} ";
      };
      echo "<br>";
  }
      
// task separator
echo "<hr style=\"margin 1rem 0\">";  

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
?>


<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 5px;
}
</style>
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tbody>
  	<?php 
  	foreach ($food_assoc as $key => $row){
  			echo "<td>{$key}</td>";
	 			foreach ($row as $item) {
  					echo "<td>{$item}</td>";
  		
  			}
  		echo '</tr>';
  	}
  	?>
  </tbody>
</table>







