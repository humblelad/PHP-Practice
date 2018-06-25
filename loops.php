<!doctype html>
<html>
<head><title>This is my php website</title></head>
<body>
<h1>
	<center><br>
<?php

//while loop
$a=1;
while($a<10)
{
	echo $a."<br>";
	$a++;
}

//for loops

$color=array("pink","yellow","violet","orange");

$total=count($color);
for($x=0;$x<$total;$x++)
{
echo $color[$x]." ";
}
?>
</h1>
</center>
</body>
</html>

 
