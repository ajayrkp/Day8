<?php
    // get the data from the form
    $loan_amount = $_POST['loan_amount'];
    $loan_duration = $_POST['loan_duration'];
    $interest_rate = $_POST['interest_rate'];

    // Principal
    $P = $loan_amount;
    
    // Monthly Interest-rate
    $r = ($interest_rate/12)/100;
    
    // Number of monthly payments
    $N = $loan_duration * 12;
    
    // monthly payment
    $c = ($P * $r * pow((1+$r),$N)) / (pow((1+$r),$N) - 1);
   // $c = round($c, 4);
    
    $RemainingPrincipal = $P;
?>
<!DOCTYPE html>

<head>
    <title>Mortagage Calculator</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../hw_6.css" />
    
    <style>
    	#tabbed {
    		margin-left:5em;
    	}
    </style>
</head>
<body>
    <div id="content">
        <h1>Calculate it...</h1><br />

        <label>Loan Amount: </label>&nbsp;$<span><?php echo $loan_amount; ?></span>
        <label id="tabbed">Loan Duration:</label>&nbsp;<span><?php echo $loan_duration; ?></span>&nbsp;year(s)
        <label id="tabbed">Interest Rate:</label>&nbsp;<span><?php echo $interest_rate; ?></span>%<br /><br /><br />
        
        <label>Monthly Payment: </label>&nbsp;$<span><?php echo $c; ?></span><br /><br />
        
       <table align="center" border="10" bgcolor="magenta">
        	<tr>
        		<th>Month</th>
        		<th>Principal</th>
        		<th>Interest</th>
        		<th>Remaining Balance</th>
        		<th>Principal/Interest</th>
        	</tr>
<?php for ($month=1; $month<=$loan_duration * 12; $month++) {
			$monthlyInterest = $RemainingPrincipal * $r;
			$thisPrincipal = $c - $monthlyInterest;
			$RemainingPrincipal -= $thisPrincipal;
			$styleFactor = $c / 200;
			$baseStylePrincipal = "background-color:green;height:25px;border:1px solid #000;" . "width:" . $thisPrincipal/$styleFactor . "px;";
			$baseStyleInterest = "background-color:red;height:25px;border:1px solid #000;" . "width:" . $monthlyInterest/$styleFactor . "px;" . "margin-left:" . $thisPrincipal/$styleFactor . "px;";
			?>
        	<tr>
        		<td><?php echo $month; ?></td>
        		<td><?php echo "$" . $thisPrincipal; ?></td>
        		<td><?php echo "$" . $monthlyInterest; ?></td>
        		<td><?php if ($RemainingPrincipal > 1) { echo "$" . $RemainingPrincipal;} else {echo "0";} ?></td>
        		<td>
        			<div style="<?php echo $baseStylePrincipal; ?>" />
        			<div style="<?php echo $baseStyleInterest; ?>" />
        		</td>
        	</tr>
<?php }?> 
        	        
        </table><br />
           
        <p>&nbsp;</p>
    </div>
</body>
</html>