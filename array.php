<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Array</title>
</head>

<body>
<?php
//Indexed or Numeric array
$Fruit=array ("Banana", "Orange", "Watermelon", "Apple", "Paw-Paw");
echo $Fruit[3]. "</br>";
//Multi dimensional
$Car=array(
array('Toyota',10,5),
array('Mercedes',8,4),
array('Honda',12,6)
);
echo "we bought" ." ". $Car[2][1]. " " . $Car[2][0]. " ". "and we sold". " ".$Car[2][2];
?>
</body>
</html>
