<html>

<head>
<link rel="stylesheet" href="fancy.css">
<title>asd</title>
</head>
<body>

</body>

<form name=tabla method=post action=>
<input type=number name='num' value=''>
<input type=submit name='go' value='Mehet'>
<input type=text name='boy' value=''>
</form>
<?php

if (isset($_POST['go']))
{
echo "<table border=1>";
for ($i=0;$i<$_POST['num'];$i++)
{
	
	echo "<tr>\n";
	for ($j=0;$j<$_POST['num'];$j++)
	{
		$rnd = rand(1 ,6);
		if ($rnd%2==0)
		{
			?>
				<td width=20px>
				<div id='cellaszin'><?php echo $rnd ?>
				</div>
			<?php
		}
		else
		{
		echo "<td width=25px>".$rnd;
		}
	}
}
echo "</table>";
}

else echo "<br>Pusztulj";

?>


</html>
