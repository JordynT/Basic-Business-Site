<?php
require_once('product.php');
$opt = '';
foreach($array as $key=> $value){
	$opt .= "<option value=\"$key\">$value</option>";
}
?>



<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://github.com/necolas/normalize.css">
		<link rel="stylesheet" href="stylesheet.css">
		<link href='http://fonts.googleapis.com/css?family=Lato|Lobster' rel='stylesheet' type='text/css'>
		<meta charset="UTF-8">
		<title>Browse</title>
	</head>
	
	<body>
			<?php 
			include_once('header.php'); 
			?>
			<div class="main">
				<h1> Browse Products</h1>
				<div>
					<span>Product:</span>
					<form action='products.php'>
					<select name="product_id" required>
						<?php echo $opt; ?>
					</select>
					<span>Quantity:</span>
					<input type="number" name="txtbox" min="0" placeholder="How many would you like?">
					<button>Submit</button>	
					</form>
				</div>	
			</div>
			
			<?php require_once('footer.php'); ?>
		
	</body>
	
</html>