<!doctype html>



<html>


	<head>

	<title>Factorial</title>

	</head>
	
	
	<body>
	
	<?PHP
	
	
	function Factorial($number)
	{
		
		$factorial = 1;
		
		for ($i = 1; $i <=$number ; $i++)
			
		
		
		{
			$factorial = $factorial * $i;
			
		}
		
		return $factorial;
		
	}
	
	
	
	
	$number = 3; //value assigned
	
	$fact = Factorial($number);//fuction called and value passed and that function will return some value
	
	echo "Factorial is ".$fact; //ans printing
	
	
	?>
	
	
	</body>
	
	
</html>