<?php
    // get the data from the form
    $number = $_POST['number'];   

    /* Calculate each row of multiplication table */
    for($i = 1; $i<21; $i++) {
    	$multipliedNumber[$i] =  $number * $i;
    }
?>
<!DOCTYPE html>

<head>
    <title>Multiplication Table for number:</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../hw_6.css" />
</head>
<body>
    <div id="content">
        <h1>Multiplication Table for number: "<?php echo $number; ?>"</h1>

        <table align="center" border="20" bgcolor="magenta">
        	<tr>
        		<th>Multiplier</th>
        		<th>Final Value</th>
        	</tr>
        	
        	<tr>
        		<td><?php echo "1"; ?></td>
        		<td><?php echo $multipliedNumber[1]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "2"; ?></td>
        		<td><?php echo $multipliedNumber[2]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "3"; ?></td>
        		<td><?php echo $multipliedNumber[3]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "4"; ?></td>
        		<td><?php echo $multipliedNumber[4]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "5"; ?></td>
        		<td><?php echo $multipliedNumber[5]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "6"; ?></td>
        		<td><?php echo $multipliedNumber[6]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "7"; ?></td>
        		<td><?php echo $multipliedNumber[7]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "8"; ?></td>
        		<td><?php echo $multipliedNumber[8]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "9"; ?></td>
        		<td><?php echo $multipliedNumber[9]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "10"; ?></td>
        		<td><?php echo $multipliedNumber[10]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "11"; ?></td>
        		<td><?php echo $multipliedNumber[11]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "12"; ?></td>
        		<td><?php echo $multipliedNumber[12]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "13"; ?></td>
        		<td><?php echo $multipliedNumber[13]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "14"; ?></td>
        		<td><?php echo $multipliedNumber[14]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "15"; ?></td>
        		<td><?php echo $multipliedNumber[15]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "16"; ?></td>
        		<td><?php echo $multipliedNumber[16]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "17"; ?></td>
        		<td><?php echo $multipliedNumber[17]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "18"; ?></td>
        		<td><?php echo $multipliedNumber[18]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "19"; ?></td>
        		<td><?php echo $multipliedNumber[19]; ?></td>
        	</tr>
        	        
        	        	
        	<tr>
        		<td><?php echo "20"; ?></td>
        		<td><?php echo $multipliedNumber[20]; ?></td>
        	</tr>
        	        
        </table>
        
        <span>
        <!--  ?php 
			for($i = 1; $i<21; $i++) {
				print $number . " x " . $i . " = " . ($number * $i) . "<br>";
			}        
		?-->
        </span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>