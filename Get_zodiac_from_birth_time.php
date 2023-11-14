<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
by OlegTim
-->
<!DOCTYPE html>
<html lang="ru">
<head>
<title> Get_zodiac_from_birth_time </title>
<meta charset='utf-8'>
</head>
<body>
<form method='post'>
   <input name="dayMonthYear" placeholder="14.01.2008" /> <br /><br />
   <input name="hours" placeholder="15.54" /> <br /><br />
   <button type="submit">Send</button>
</form>
<?php
$var = htmlspecialchars($_POST['dayMonthYear']);
$var2 = htmlspecialchars($_POST['hours']);
if ($var!=0){
echo "<br />You printed:   $var $var2";
if ($var2==null){echo " Exact time is unknown ";}
echo "<br />";

$err=0;
$year = 666;
$month = 666;
$day = 666;
$hour = 666;
$minute = 666;

$counter = strpos($var, '.' );
$day = substr($var,0,$counter);
$var =  substr($var,$counter+1 );
$counter = strpos($var, '.' );
$month = substr($var,0,$counter);
$year =  substr($var,$counter+1 );

if ($year!=0 || $month!=0 || $day!=0){}else{$err++;}

if ($var2!=null){
$counter = strpos($var2, '.' );
$str = (substr($var2,0,$counter));
if ($str!=null){$hour=$str;}
$str =  substr($var2,$counter+1 );
if ($str!=null){$minute=$str;}
//
if ($hour>-1 && $hour<24){}else{$err++;}
if ($minute>-1 && $minute<60){}else{$err++;}
}

if ($year>1900 && $year<2100){}else{$err++;}
if ($month>0 && $month<13){}else{$err++;}
if ($day>0 && $day<32){}else{$err++;}  //february etc

if ($err==0){//
$year-=  1900;
$t=  $year/12; //% strange
$t=  (int)$t;
$year = (int)($year-$t*12);

echo "<br /> You were born in the year of ";
echo getAnimal($year);

echo "<br /> Your zodiac is ";
$zod=0;
if ($month==3 && $day>20){$zod=0;}
if ($month==4 && $day<20){$zod=0;}
if ($month==4 && $day>19){$zod=1;}
if ($month==5 && $day<21){$zod=1;}
if ($month==5 && $day>20){$zod=2;}
if ($month==6 && $day<22){$zod=2;}
if ($month==6 && $day>21){$zod=3;}
if ($month==7 && $day<23){$zod=3;}
if ($month==7 && $day>22){$zod=4;}
if ($month==8 && $day<23){$zod=4;}
if ($month==8 && $day>22){$zod=5;}
if ($month==9 && $day<23){$zod=5;}
if ($month==9 && $day>22){$zod=6;}
if ($month==10 && $day<24){$zod=6;}
if ($month==10 && $day>23){$zod=7;}
if ($month==11 && $day<22){$zod=7;}
if ($month==11 && $day>21){$zod=8;}
if ($month==12 && $day<22){$zod=8;}
if ($month==12 && $day>21){$zod=9;}
if ($month==1 && $day<20){$zod=9;}
if ($month==1 && $day>19){$zod=10;}
if ($month==2 && $day<19){$zod=10;}
if ($month==2 && $day>18){$zod=11;}
if ($month==3 && $day<21){$zod=11;}
echo getZod($zod);

if ($var2!=null){
if ($hour==23 || $hour==0){$hour=0;} else {$hour++;}
$hour = (int) ($hour/2);
echo "<br /> In the hours of ";
echo getAnimal($hour);
}

}//
else{
echo "<br /> Error <br />";
}
// echo "<br /> $year $month $day $hour $minute <br />";
}
else{
echo '<br />For zodiac enter information, please, and push Send. <br />';
echo 'For example, if you were born 14 January 2008, type: 14.01.2008<br />';
echo 'If you know the exact time, type in the second form,<br /> i.e 3:54 a.m., 15.54<br />';
echo 'If you do not know the exact time, do not type in the second form.<br />';
echo 'Note, Gregorian calendar and Chinese zodiac have differences.<br />';
}
function getAnimal($p){//
$r="";
switch($p){
case 0:{$r= "Rat";  break;}
case 1:{$r= "Ox (bull)"; break;}
case 2:{$r= "Tiger";  break;}
case 3:{$r= "Rabbit";  break;}
case 4:{$r= "Dragon";  break;}
case 5:{$r= "Snake";  break;}
case 6:{$r= "Horse";  break;}
case 7:{$r= "Goat";  break;}
case 8:{$r= "Monkey";  break;}
case 9:{$r= "Rooster (Cock)";  break;}
case 10:{$r= "Dog";  break;}
case 11:{$r= "Pig";  break;}
default:  {$r= "err";}
}
return $r;
}//
function getZod($p){//
$r="";
switch($p){
case 0:{$r= "Aries (Ram)";  break;}
case 1:{$r= "Taurus (Bull)"; break;}
case 2:{$r= "Gemini (Twins)";  break;}
case 3:{$r= "Cancer (Crab)";  break;}
case 4:{$r= "Leo (Lion)";  break;}
case 5:{$r= "Virgo (Virgin)";  break;}
case 6:{$r= "Libra (Balance)";  break;}
case 7:{$r= "Scorpius (Scorpion)";  break;}
case 8:{$r= "Sagittarius (Archer)";  break;}
case 9:{$r= "Capricornus (Goat)";  break;}
case 10:{$r= "Aquarius (Water Bearer)";  break;}
case 11:{$r= "Pisces (Fish)";  break;}
default:  {$r= "err";}
}
return $r;
}//
?>
</body>
</html>