<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sample PHP website</title>
<style type="text/css">* {font-family:arial, sans-serif;}</style>
</head>
<body>
<h1>
<?php
echo "Welcome to your Sample PHP website";
?>
</h1>
<div id="content">
	<p>You can also get this sample site on :</p>
	<ul>
	<?php
	$services = array("Azure App service","Azure Webapp for Containers","Azure Virtual Machines - Windows", "Azure Virtual Machines - Linux");
	$arrlength=count($services);
	for($x=0;$x<$arrlength;$x++)
	{
	?>
	<li>
	<?php	
		echo $services[$x];			
	?>
	</li>
	<?php	
	}
	?>
	</ul>
</div>
</body>
</html>
