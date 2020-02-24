<html>
	<head>
		<title>Power</title>
	</head>
	<body>
		<h1 align=center> Power</h1>
		<?php
			$power=1;
			$l=$_GET["two"];
			for($i=1;$i<=$l;$i++)
			{	
				$power=$power*$_GET["param1"];
			
			}
				echo "$power";
		?>
	</body>
</html>