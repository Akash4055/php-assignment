<html>
	<head>
		<title> square</title>
	</head>
	<body>
		<h1>square</h1>
		<?php
			$arr=array(11,22,33,44,55);
			square($arr);
			
			function square($arr)
				{
					for($i=0;$i<5;$i++)
						{
							$sqr=$arr[$i]*$arr[$i];
							echo "$sqr<br/>";
						}
						
				}
				?>
	</body>
</html>