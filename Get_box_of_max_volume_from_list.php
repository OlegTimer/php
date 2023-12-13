<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> Get_box_of_max_volume_from_list </title>
<meta charset='utf-8'>
</head>
<body>
Given square list with side h, and cutting 4 equal squares at it's corners,  <br /> 
what maximum volume of box can you get?  <br />
(Or which size to cut squares at corners to get box of max volume?) <br /> <br /> 
Enter the side of main square, please:<br /> 	
<form method='post'>
   <input name="var" placeholder="" /> <br /><br />
   <button type="submit">Calculate</button> <br />
</form>
<?php
$h  = htmlspecialchars($_POST['var']);
$x = 0.0;
$d = 0.01;
$max=0.0;
$x2 = 0.0;

if ($h!=null){} else{echo "err <br />"; exit(); }

while ($x<$h/2){
$x+=$d;
$v=$x*($h-2*$x)*($h-2*$x);
if ($v>$max) {$max = $v; $x2=$x;}
}

echo "Given square list with side $h  <br />";
echo "max volume is: $max cubic el. with  squares cut size of: $x2 <br />";
?>
</body>
</html>