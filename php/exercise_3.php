<!--
	 Day 5 Exercise 3
** At store is having a sale. They are giving
** 10% off purchases of $10 or lower and 20% off
** purchases of greater than $10.
** Write a short program that displays the discount (10%
** or 20% ) and final price.

** - Use a variable for the items's cost, run as many
** cases necessary to test the program.
**
-->

<?php

	// Generate a random number from 0 to 100 as price of a product
	$costOfProduct = rand(0, 100);
	print "NOTE: Original Cost of the product is Random Number from 0 to 100 <br /><br />";
	print "Original Cost of the product is : " . $costOfProduct . "<br />";
	
	if ($costOfProduct <= 10) {
		print "You get the discount of 10% and Final price of this product is : " . (0.9 * $costOfProduct) . "<br />";
		print "Hurray!! You saved : " . ($costOfProduct * 0.1);
	} else {
		print "You get the discount of 20% and Final price of this product is : " . (0.8 * $costOfProduct) . "<br />";
		print "Hurray!! You saved : " . ($costOfProduct * 0.2);
	}

?>