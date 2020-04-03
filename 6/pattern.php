<!doctype html>



<html>


	<head>

	<title>Pattern</title>

	</head>
	
	
	<body>
	
	
	<?PHP
	
	//Printing Hollo square
	
	for ($row=1; $row<=6; $row++)
	{
		
		
		for ($col=1; $col<=6; $col++)
		{
			
			if($row==1 || $row==6 || $col ==1 || $col==6)
			{
				
				echo ("*");
				
			}
			else
			{
				
				echo("&nbsp;&nbsp;");
			}
			
			
		}
		
		echo nl2br("\n");
		
		
	}
		

	
	
	
	
	?>
	
	
	</body>
	
	
</html>