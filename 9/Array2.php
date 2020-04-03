<!doctype html>


<html>



		<head>

		<title>Array</title>

		</head>



		<body>
		
		<?php
		
		$mynewarray = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos","Buenos Aires", "Cairo", "London");
		
		
		
		
		foreach($mynewarray as $a) 
		
		{
			
			echo($a.",");
			
		}
		
		
		sort($mynewarray);
		
		echo "<br>After Sorting <br>";
		
		foreach($mynewarray as $a) 
		
		{
			
			echo($a.",");
			
		}
		
		rsort($mynewarray);
		
		echo "<br>After Re-Sorting <br>";
		foreach($mynewarray as $a) 
		
		{
			
			echo($a.",");
			
		}
		
		
		array_push($mynewarray,"Los Angeles", "Calcutta", "Osaka", "Beijing");
		
		echo "<br>After adding elements<br>";
		
		print_r($mynewarray);
		
		
		sort($mynewarray);
		
		echo("<br> after finally sorting<br>");
		
		print_r($mynewarray);
		
		?>


		</body>
		
</html>