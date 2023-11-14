<?php
/*
cd C:\1
php -S localhost:8000
http://localhost:8000/
// index.php
<!DOCTYPE html>
<html lang="ru">
<head>
<title>PHP dec to Latin</title>
<meta charset='utf-8'>
</head>
<body>
Enter num from 1 to 3888, please<br />
<form action="dec_to_Latin.php">
   <input name="param_name" />
   <button type="submit">Send</button>
</form>
</body>
</html>
*/
$var = $_GET['param_name'];
if ($var<1 || $var>3888){
echo 'err';
}
else{

$ones  = $var%10;
$tens  = (int) ($var%100/10);
$huns  = (int) ($var%1000/100);
$thous = (int) ($var/1000);
$res="";

if ($thous==1){$res.='M';}
if ($thous==2){$res.='MM';} 
if ($thous==3){$res.='MMM';}

if ($huns==9){$res.='CM';}
if ($huns==8){$res.='DCCC';}
if ($huns==7){$res.='DCC';}
if ($huns==6){$res.='DC';}
if ($huns==5){$res.='D';}
if ($huns==4){$res.='CD';}
if ($huns==3){$res.='CCC';}
if ($huns==2){$res.='CC';}
if ($huns==1){$res.='C';}

if ($tens==9){$res.='XC';}
if ($tens==8){$res.='LXXX';}
if ($tens==7){$res.='LXX';}
if ($tens==6){$res.='LX';}
if ($tens==5){$res.='L';}
if ($tens==4){$res.='XL';}
if ($tens==3){$res.='XXX';}
if ($tens==2){$res.='XX';}
if ($tens==1){$res.='X';}

if ($ones==9){$res.='IX';}
if ($ones==8){$res.='VIII';}
if ($ones==7){$res.='VII';}
if ($ones==6){$res.='VI';}
if ($ones==5){$res.='V';}
if ($ones==4){$res.='IV';}
if ($ones==3){$res.='III';}
if ($ones==2){$res.='II';}
if ($ones==1){$res.='I';}


echo $res;

}
?>