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
<?php for ($i=1; $i<21; $i++) {?> 

        	<tr>
        		<td><?php echo $i; ?></td>
        		<td><?php echo $multipliedNumber[$i]; ?></td>
        	</tr>
<?php }?> 
        	        
        </table><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>