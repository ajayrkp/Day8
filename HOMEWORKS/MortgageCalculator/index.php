<!--  
This program calculates the mortgage each month. In addition, it 
calculats the Principal and interest components for each month. 
-->


<!DOCTYPE html>

<head>
    <title>Mortgage Calculator</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../../css/extra.css" />
    <link rel="stylesheet" type="text/css" href="../hw_6.css" />
<style> 
	form {
		width: 450px;
		margin: 0 auto;
		padding: 15px;
	}
	
	label {
		width: 10em;
		padding-right: 1em;
		float: left;
	}
	
	#data input {
		float: left;
		width: 10em;
		margin-bottom: .5em;
	}
	
	#data select {
		float: left;
		width: 10em;
		margin-bottom: .5em;
	}
	
	#buttons input {
		float: left;
		margin-bottom: .5em;
		color: black;
	}
	
	br {
		clear: left;
	}
	
	#mainContent {
		text-align: center;
		color: navy;
	}
	
	/* Presenation */
	form {
		border: 2px solid navy;
	}
	
	#colorBlack {
		color: black;
	}
</style>
    
</head>

<body>
    <div id="content">
        <h1>Mortgage Calculator...</h1><h2> (It's fun guys...)</h2>
        <form action="mortgage_calculator.php" method="post">

            <div id="data" >
                <label>Loan Amount:</label>$
                <input type="text" name="loan_amount" value="1000000" required="true"/><br />

                <label>Loan Duration:</label>
               	<select name="loan_duration" >
               		<option value="1">1</option>
					<option value="2">2</option>
                	<option value="3">3</option>
					<option value="5">5</option>
					<option value="7">7</option>
					<option value="10">10</option>
					<option value="15">15</option>
					<option value="30" selected="selected">30</option>
				</select>Year(s)<br />

                <label>Loan Interest Rate:</label>
                <select name="interest_rate" >
                	<?php for ($i=0; $i<=25; $i+=0.125) {?> 
                		<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               		<?php } ?>
				</select>%<br />
            </div>

            <div id="buttons">
                <label >&nbsp;</label>
                <input  type="submit" value="Submit" /><br />
            </div>

        </form>
    </div>
</body>
</html>