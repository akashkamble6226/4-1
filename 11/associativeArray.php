<!doctype html>


<html>


	<head>
	
	<title>Associative Array</title>
	</head>
	
	
	<body>
	
	
	<?PHP
	
	
	//Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria;
//Buenos Aires, Argentina; Cairo, Egypt; London, England.

	 $data = array("Tokyo"=>"Japan","Mexico City"=>"Mexico","New York City"=>"USA","Mumbai"=>"India","Seoul"=>"Korea","Shanghai"=>"China","Lagos"=>"Nigeria","Buenos Aires"=>"Argentina","Cairo"=>"Egypt","London"=>"England");
	 
	 
	 $cityName = $_POST["txt"];
	 
	 
	 foreach($data as $d=>$k)
	 
	 {
		 
		 if($d == $cityName)
		 {
			 
			 echo "You entered City is ".$d."\nbelons to ".$k."\nCountry";
			 break;
			 
			 
		 }
		 
		
	 }
	
	
	?>
	
	</body>
	
	
	
</html>