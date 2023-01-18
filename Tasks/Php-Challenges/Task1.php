<?php

/*
Write a program that calculates monthly water bill.
Conditions
For 0-20 units - Ksh. 35 per unit
For 21-49 units - Ksh. 40 per unit
For 50-100 units - Ksh. 45 per unit
For units above 100 - Ksh. 50 per unit
*/


/*Method - Using if else */
function calculate($units){
	if ($units < 21){
		return 35;
	}else if($units < 50){
		return 40;
	}else if ($units < 101){
		return 45;
	}else{
		return 50;
	}
}

$message="";
if (isset($_POST['submit']) && isset($_POST['units'])){
	$units=intval($_POST['units']);
	if ($units > 0){
		$rate=calculate($units);
		$amount=$rate * $units;
		$message="The rate for ".$units." units is Ksh ". $rate. " and the total amount is Ksh ".$amount; 
	}else{
		$message="Units can't be a negative value or string";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Water Bill Calculator</title>
</head>
<body>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>


<style type="text/css">
	body {
		background: rgb(39,39,39,0.1);
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	form {
		background: white;
		margin:4px auto;
		width: 90vw;
		text-align: center;
		border-radius:8px;
		height:40vh;
		display: flex;
		flex-direction: column;
		gap:2vh;
		justify-content: center;
		align-items: center;
	}

h1{
	font-family: monospace;
}

input[type="text"] {
	padding:20px;
	font-size: 20px;
	color:grey;
	width: 50%;
	border-radius: 4px;
	border: 1px solid rgb(35, 164, 237);
}

input[type="text"]:active,input[type="text"]:hover{
	border: 1px solid rgb(35, 164, 237);
}

input[type="submit"] {
	color:white;
	font-size: 20px;
	border-radius: 4px;
	border:none;
	width: 20%;
	background:rgb(35, 164, 237);
	padding:10px;
} 

.result {
	text-align: center;
	color:grey;
	font-size:20px;
}

</style>

<form method="POST" action="">
	<h1 style="font-size:40px;">Water Bill Calculator</h1>
	<h1>Enter the number of units to calculate</h1>
	<input type="text" class="input" name="units" placeholder="Enter units e.g 20">
	<input type="submit" class="button" name="submit" value="Calculate">
	<p class="result"><?php echo $message;?></p>
</form>

</body>
</html>



