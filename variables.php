
	<?php
//task one ----------------------------------------------------
	$language = "PHP";
	$greeting = "Welcome to $language !";
	echo "$greeting";

// task separator
echo "<hr style=\"margin 1rem 0\">";
		?>

   
	<?php
//task two ----------------------------------------------------
		$firstName = 'Kay';
		$lastName = 'Wu';
		$day = 21;
		$month = 'September';
		$year = 1995;

		$assembled = "My name is {$firstName} {$lastName}. I was born on {$day} of {$month} in {$year}.";

		echo "<p>$assembled</p>";

echo "<hr style=\"margin 1rem 0\">";
    	?>


    <?php
//task three----------------------------------------------------
    	$length = 3.5;
    	$width = 6.5;

    	$area = $length * $width;
    	echo $area;

echo "<hr style=\"margin 1rem 0\">";
    	?>

    <?php
//task four----------------------------------------------------
    	$product = "armchair";
    	$price = 249.00;
    	$tax = 0.13;
    	$delivery = 0.05;

    	$total = ($price + ($price * $delivery)) * ("1" + $tax);
        echo $total. "---->". number_format($total,2, '.', ',');
    	

echo "<hr style=\"margin 1rem 0\">";
    	?>






    

<figure>
	  <img src="https://placehold.jp/24/e8d2ae/fff/300x300.png" alt="placeholder-image">
	  <figcaption> 
	  	<?php
	  	echo "<p>armchair : $295.44</p>";
	  	?>

	  </figcaption>
</figure>
   <hr style=\"margin 1rem 0\">
    