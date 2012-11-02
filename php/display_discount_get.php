<?php
	// Declare and Instantiate variables (optional)

	
	// Get the user data from the form
	$product_description = $_GET['product_description'];
	$list_price = $_GET['list_price'];
	$discount_percent = $_GET['discount_percent'];	

	// Calculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
	
	// Apply currency formatting to the dollar amount for output
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);	
    
	// Output the results
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/extra.css" />
    
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
span {
	width: 10em;
	padding-right: 1em;
	float: center;
}

#data input {
	float: left;
	width: 15em;
	margin-bottom: .5em;
}

#buttons input {
	float: left;
	margin-bottom: .5em;
}

br {
	clear: left;
}

#mainContent {
	text-align: center;
}

/* Presenation */
form {
	border: 2px solid navy;
}

#mainContent {
	color: navy;
}
body {
	background-image: none; 
	align: center;
}
#content {
	align:center;
}
</style>
    
    
</head>
<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br />

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
</body>
</html>