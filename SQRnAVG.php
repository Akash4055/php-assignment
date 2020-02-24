<html>
	<head>
		<title> square</title>
	</head>
	<body>
		<h1>square</h1>
		<?php
			$arr=array(11,22,33,44,55);
			square($arr);
			echo"<hr/>";
			echo"<h1>average</h1>";
			$r=average($arr);
			echo $r;
			
			function square($arr)
				{
					for($i=0;$i<5;$i++)
						{
							$sqr=$arr[$i]*$arr[$i];
							echo "$sqr<br/>";
						}
						
				}
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