<!--
	Homework for Day 4
	
Exercise 1:
-----------

•Write a short PHP program, as we just did, that will print three lines:
–Your name
–Your birth date
–Your favorite color
•My name is James Marcus.
•I was born January 26, 1961.
   My favorite color is blue

	
-->

<?php
    $myName = "Ajay Panchal";
    $myBirthDate = date('Y-m-d', strtotime("-75 years"));
    $myFavoriteColor = rand(0,9);
 
	print "Day 4 Homework - Exercise 1" . "<br />";
	print "-----------------------------------------" . "<br /><br /><br />";
	
	print "My name is: " . $myName . "<br />";
	print "My birth date is: " . $myBirthDate . "<br /><br />";
	print "DO YOU WONDER ---- How I am 75 years old and every day is my birthday !!!" . "<br /><br />";
	
	switch($myFavoriteColor) {
		case 0:
			print "My favorite color is: " . "Brown";
			break;
		case 1:
			print "My favorite color is: " . "Red";
			break;
		case 2:
			print "My favorite color is: " . "Blue";
			break;
			
		case 3:
			print "My favorite color is: " . "Green";
			break;
			
		case 4:
			print "My favorite color is: " . "Gray";
			break;
			
		case 5:
			print "My favorite color is: " . "Magenta";
			break;
			
		case 6:
			print "My favorite color is: " . "Violet";
			break;
			
		case 7:
			print "My favorite color is: " . "Yellow";
			break;
			
		case 8:
			print "My favorite color is: " . "Orange";
			break;
			
		case 9:
			print "My favorite color is: " . "Pink";
			break;
			
		default:
			print "My favorite color is: " . "I AM COLORLESS!!!";
			break;
			
	}
	print "<br /><br /> SEE AT THE AGE OF 75, MY FAVORITE COLOR ALSO CHANGES EVERYTIME YOU ASK ME !!!"
	

	
?>

