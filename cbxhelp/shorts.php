<html> 

<head>
<link rel="stylesheet" href="cbxhelp.css">
 
<title> CBX Helper </title>
</head>

<body>
	<div id="body_title_container">
		<h1> CBX Helper</h1>
	</div>

	<div id="fronts_reds">
		<h2>Fronts</h2>
		<form action="frontsreds.php" method="post">
  			Exported Sheets: <input type="text" required name="frontsreds" value="" /><br />
  			<input type="submit" value="Compare to Settles" />
		</form>	
	</div>
	
	<div id="shorts">
		<h2>Shorts</h2>
		<form action="shorts.php" method="get">
  			Exported Sheets: <input type="text" required name="shorts" value="" /><br />
  			<input type="submit" value="Compare to Settles" />
		</form>		
	</div>

	<div id="greens">
		<h2>Greens</h2>
		<form action="greens.php" method="post">
  			Exported Sheets: <input type="text" required name="greens" value="" /><br />
  			<input type="submit" value="Compare to Settles" />
		</form>	
	</div>
</body>
</html>
