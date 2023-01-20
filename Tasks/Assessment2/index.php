<?php
/*Assessment 2 (PHP)
Submit your link by 11:30AM. No more submissions allowed after that time.
- You are allowed to use google
- Consultations are not allowed
Using OOP;

Write a program that calculates the monthly water bill. Classes should be in their own file. Make the application responsive.

Conditions:
For 0-20 units - Ksh. 35 per unit
For 21-49 units - Ksh. 40 per unit
For 50-100 units - Ksh. 45 per unit
For units above 100 - Ksh. 50 per unit
*/


include 'classes.php';

$message="";

if (isset($_POST['submit']) && isset($_POST['units'])){/*Form submitted*/
	if(!empty($_POST['units']) && intval($_POST['units']) > 0){/*Units are not empty*/
		$units=$_POST['units'];
		$instance=new BillCalculator($units);
		$rate=$instance->calculateBill();
		$amount=intval($units) * $rate;
		// $message="The rate for ".$units." units is Ksh ". $rate. " and the total amount is Ksh <b>".$amount."</b>"; 
		$message="Units : ".$units."</br> Rate : Ksh ". $rate. ".00 <br/> Total : Ksh <b>".$amount.".00</b>"; 
	}else{
		$message="Units cannot be empty,negative or zero";
	}
}


// $units=10;
// $instance=new BillCalculator("10");
// $rate=$instance->calculateBill();
// echo 'The rate is ' . $rate;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Water Bill Calculator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<div class="form-container">
	<form method="POST" action="">
		<h1>Water Bill Calculator</h1>
		<h2>Enter the number of units to calculate</h2>
		<input type="text" class="input" name="units" placeholder="Enter units e.g 20">
		<input type="submit" class="button" name="submit" value="Calculate">
		<p class="result"><?php echo $message;?></p>
	</form>
</div>






</body>
</html>