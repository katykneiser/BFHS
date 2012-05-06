<html> 

<head>
<link rel="stylesheet" href="cbxhelp.css">
 
<title> Fronts/Reds </title>
</head>

<body>
	<div id="body_title_container">
		<h1> Fronts and Reds</h1>
	</div>
	<?php
	
		if( isset($_POST['frontsreds'])
		{
			$exportData = htmlspecialchars($_POST['frontsreds']);		
		}		
		
		echo "{$exportData}";
	?>
		
</body>
</html>
