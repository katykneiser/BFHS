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
	
		//if( isset($_POST['frontsreds']){
		$exportData = htmlspecialchars($_POST['frontsreds']);		
		//}		
		
		echo "{$exportData}";

		
		$rightNow = strtotime(Friday);
		$settleDate = $rightNow;
		$lifelink = "http://www.liffe.com/data/dopt$settleDate.txt";		
		echo {$lifelink};
	?>
		
</body>
</html>
