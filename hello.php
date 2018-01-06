<html>
<head>
</head>
<body>
<?php
	$x=1;
	$y=2;
	echo "Hello World";
	function macam()
	{	
		
		for($a=0;$a!=6;$a++)
		{
			echo "<h$a>Hello World</h$a>";
		}
	}
	macam();
	echo $y;
	$cars=array("volvo","bmw","toyota");
	$length1=count($cars);
		foreach($cars as $car1)
		{
			echo"VALUE:" ,$car1."<br/>";
		}
	
?>
</body>
</html>