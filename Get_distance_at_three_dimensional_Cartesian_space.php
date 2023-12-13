<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> Get_distance_at_three_dimensional_Cartesian_space </title>
<meta charset='utf-8'>
</head>
<body>
Get distance between points at three-dimensional Cartesian space<br />
Enter xyz for points, separated with SPACE   i.e: <br /> 	1.0 -1 2<br /><br />
<form method='post'>
   <input name="xyz" placeholder="0 0 0" /> <br /><br />
   <input name="xyz2" placeholder="0 0 0" /> <br /><br />
   <button type="submit">Calculate</button> <br />
</form>
<?php
$var  = htmlspecialchars($_POST['xyz']);
$var2 = htmlspecialchars($_POST['xyz2']);

$arr=[];
$arr= explode(' ', $var);
$arr2=[];
$arr2= explode(' ', $var2);  

if (isset($arr[2]) && isset($arr2[2])){
$t =str_replace(' ',' ',$var);
$t2 =str_replace(' ',' ',$var2);
echo "$t<br /> $t2 <br />";
$res =  ($arr[0]-$arr2[0])*($arr[0]-$arr2[0]);
$res += ($arr[1]-$arr2[1])*($arr[1]-$arr2[1]);
$res += ($arr[2]-$arr2[2])*($arr[2]-$arr2[2]);
$res = sqrt ($res);
echo "Distance is:  $res";
}

?>
</body>
</html>