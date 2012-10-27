<!--
	Homework for Day 4
	
Exercise 2:
-----------

•Calculate the number of minutes in a week using variables
–$DaysPerWeek
–$HoursPerDay
–$MinutesPerHour
•How many minutes are there in a week in the Bilky Way, 
a near parallel galaxy, if there are 26 hours on a day there? 

	
-->

<?php
    $DaysPerWeek = 7;
    $HoursPerDay_Earth = 24;
    $HoursPerDay_Bilky = 26;
    $MinutesPerHour = 60;
 
	print "Day 4 Homework - Exercise 2" . "<br />";
	print "-----------------------------------------" . "<br /><br /><br />";
	
	print "We live on planet Earth: So care for our time first" . "<br />";
	print "Number of minutes in a week on Our planet are : " . $DaysPerWeek * $HoursPerDay_Earth * $MinutesPerHour . "<br /><br />";
	
	print "Okay, sometimes we have to care for other planets too ... " . "<br />";
	print "Number of minutes in a week on Bilky way are : " . $DaysPerWeek * $HoursPerDay_Bilky * $MinutesPerHour . "<br /><br />";
	
	
?>

