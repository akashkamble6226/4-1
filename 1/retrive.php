<!doctype html>

<html>


	<head>
			<title>Conditional statement</title>
	</head>
	
	
	<body>
	
	
	<?php
	
	$input = $_POST["cons"];	
	
	
	
	if ($input < 50)
	{	
		
		$amt = ($input * 3.50);
		
	}
	if($input >= 50 and $input < 100)
	{
		
		$amt = $input *  4.00;
		
		
	}
	
	if($input >= 100 and $input < 200)
	{
		
		$amt = $input * 5.20;
		
	}
	
	if($input >= 200)
		
	{
		
		$amt = $input * 6.50;
			
			
	}
	
	
	echo "You have to pay Rs. - \n".$amt."/-";	
	
	
	
	
	?>
	
	
	
	</body>
	
	
	
	