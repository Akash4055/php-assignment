<html>
	<head>
		<title> average of 2 number</title>
	</head>
	<body>
		<h1>average</h1>
		<?php
			$arr=array(11,22,33,44,55);
			$r=average($arr);
			echo $r;
			
			function average($arr)
				{
					$sum=0;
					for($i=0;$i<5;$i++)
						{
							$sum=$sum+$arr[$i];
						}
						$sum=$sum/5;
						return $sum;
				}
				?>
	</body>
</html>