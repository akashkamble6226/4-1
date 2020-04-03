<!doctype html>


<html>



		<head>

		<title>Array</title>

		</head>



		<body>
		
		<?php
		
		$myarray = array("Jan","Feb","March","April","May","June","July","Aug","Sep","Oct","Nov","Dec");
		
		
		$numTodelete = 5;
		
		foreach($myarray as $a => $val) 
		
		{
			
			if( $a == $numTodelete )//if that key which is here $a matches with $numTodelete
			{
				
				
				unset($myarray[$a]);
				
				
				
			}
			
		}
		
		print_r($myarray);
		
		
		
		?>


		</body>
		
</html>