<!doctype html>

<html>


	<head><title>SwitchCase</title>
	
	</head>
	
	
	<body>
	
	<?php
	
	
	$input1 = $_POST["num1"];
	$input2 = $_POST["num2"];
	
	$choice = $_POST["ch"];
	
	switch($choice)
	
	
	{
		
		case "1":
				echo "You've choose Addition\n";
				 $ans = $input1 + $input2;
				 echo "Ans is \n". $ans;
				 break;
		
		case "2":
				echo "You've choose Substraction\n";
				 $ans = $input1 - $input2;
				 echo "Ans is \n". $ans;
				 break;
				 
		case "3":
				echo "You've choose Multiplication\n";
				 $ans = $input1 * $input2;
				 echo "Ans is \n". $ans;
				 break;
				 
		
		case "4":
				echo "You've choose Dividation\n";
				if($input2==0)
				{
					echo "Sorry divide by zero not possible ";
					break;
					
				}
				else
				{
					
					
					
				 $ans = $input1 / $input2;
				 
				 echo "Ans is \n". $ans;
				 break;
				 
				}

		default:
				echo "Not valid input";
				
		
	}
	
	
	?>
	
	</body>
	
	
</html>