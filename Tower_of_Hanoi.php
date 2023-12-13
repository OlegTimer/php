<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> Tower_of_Hanoi </title>
<meta charset='utf-8'>
</head>
<body>
There are 3 sticks and rings of different size. Rings can be placed smaller on bigger only.  <br /> 
How to transfer ordered rings from 1 stick to another (say to 3, while 2 to help)?  <br />
<br />Enter the number of rings please:<br /> 	
<form method='post'>
   <input name="var" placeholder="" /> <br /><br />
   <button type="submit">Calculate</button> <br />
</form>
<?php
$n  = htmlspecialchars($_POST['var']);
if ($n!=null){} else{echo "no number ring entered yet <br />"; exit(); }
$c=0;
hanoi($n,1,3,$c);
echo " <br />With $n rings total $c moves <br />";
function hanoi($n, $k, $m,&$c){
if ($n!=0){
$c++;
$p=6-$k-$m;
hanoi($n-1, $k, $p,$c);
echo "Disk from stick $k move to stick $m <br />";
hanoi($n-1, $p, $m,$c);
}
}
?>
</body>
</html>