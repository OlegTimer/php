<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> Armstrong_nums </title>
<meta charset='utf-8'>
</head>
<body>
<?php
$i=100;
$d=3;
while($i<10000){
$t = $i%10;
$t2 = (int) (($i%100)/10);
$t3 = (int) (($i%1000)/100);
$t4 = (int) (($i%10000)/1000);
if (($t4**$d +$t3**$d + $t2**$d + $t**$d) == $i) { echo "$i <br />"; }
$i++;
if ($i==1000){$d++;}
}
?>
</body>
</html>