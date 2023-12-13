<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> Get_box_of_max_volume_from_list_dichotomy </title>
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
if ($h!=null){} else{echo "err <br />"; exit(); }
$a=0.0;
$b=$h*0.5;
$k=0.01;

while (($b-$a)>$k){
$c = ($a+$b)*0.5;
$r = $k*($b-$a);
$x1= ($a+$b)*0.5 - $r;
$x2= ($a+$b)*0.5 + $r;

$f1=$x1*($h-2*$x1)*($h-2*$x1);
$f2=$x2*($h-2*$x2)*($h-2*$x2);

if ($f1<$f2){
$a = $x1;
}
else{
$b=$x2;
}
}

$a = ($a+$b)*0.5;
$b = $a*($h-2*$a)*($h-2*$a);

echo "<br />Given square list with side $h  <br />";
echo "max volume is: $b cubic el. with  squares cut size of: $a <br />";
?>
</body>
</html>