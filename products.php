<?php

// require the product"database"
require_once('product.php');


$product_id = '';
$msg = '';
$amount = ''; 

if(isset($_GET['product_id'])) {
	$product_id = $_GET['product_id'];
}

if(isset($_GET['txtbox'])) {
	$amount = $_GET['txtbox'];
}



// if the supply key exists
if(array_key_exists($product_id, $array)){	
	if ($amount > 0 ) {
		$msg = "You want to order " . $amount ." ". $array[$product_id];
	} 

	if ($amount > 7 && $_GET['product_id'] == '0') {
		$msg = "You cannot order over 7 Macbooks";
	} 

	if ($amount < 1){
		$msg = "Please choose a valid number of items";
	}

	// if it doesn't exist
} else {
	$msg = "Please choose a valid item";
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://github.com/necolas/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Lato|Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="stylesheet.css">
	<title>Document</title>
</head>
<body>
	<?php require_once('header.php');?>

	<div class="main foo">
		
		<?php echo $msg; ?>
		
	</div>
<?php require_once('footer.php'); ?>	
</body>
</html>