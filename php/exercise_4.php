<!--
	 Day 5 Exercise 4
** Write a short program to print a multiplication or times
** table. Your program should output something like:
**   - Here is the 5's table:
**   - 5 X 1 = 5
**   - 5 X 2 = 10
**   -- ...
**   - 5 X 10 = 50
-->

<?php
	// Get the random number between 1 and 20 for the times table
	$startNumberForTable = 1;
	$EndNumberForTable = 99;
	$tableNumber = rand($startNumberForTable, $EndNumberForTable);
	
	print "The multiplication table for number : " . $tableNumber . "<br><br>";
	
	for($i = 1; $i<21; $i++) {
		print $tableNumber . " x " . $i . " = " . ($tableNumber * $i) . "<br>";
	}

?>