<!doctype html>
<html>
<head><title>This is my php website</title></head>
<body>
<h1>
	<center><br>
<?php

//This is a comment :)
$one=50;
$two=6;
$three=$two*$one;
echo $three."<br>";
echo ++$three."<br>";//incrementing and decrementing!
echo --$three."<br>";

if ($three!=$one)
{
echo "The variable doesn't follow the given cond.";
}
/**
Examples of comparison operators are-
>=
<=
==
!=   not equal to..
>
<


**/

?>
</h1>
</center>
</body>
</html>
