<!doctype html>


<html>



	<head>
	
	
	<title>ChessBoard</title>
	
	
	</head>
	
	
	
	<body>
	
	<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
	
	<?php
	
	for ($row=1; $row<=8; $row++) //starting from 1 row
		
	
	{
		echo "<tr>"; //first table row drawn
		
		for ($col=1;$col<=8;$col++)
			
		{
			
			$total = $row + $col; //for checking odd or even 
			
			if($total % 2 == 0)//if even then white color i.e 1,2,4,8
			{
				
				echo "<td height=30px width=30px bgcolor=#ffffff></td>";
				
			}
			
		    else//for printing  black color if odd number is there
				
			{
			

				echo "<td height=30px width=30px bgcolor=#000000></td>";
				
					
			}

			
		}
		
		
		echo "</tr>";//first table row completed
		
		
	}
	
	
	
	
	?>
	
	
	
	
	</table>
	
	
	
	
	</body>
	
	
</html>