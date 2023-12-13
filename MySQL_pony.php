<!--
cd C:\1
php -S localhost:8000
http://localhost:8000/
index.php
mysqli win since php 5
php.ini.dev -> php.ini
extension_dir = "d:\php\ext"
extension=mysqli
run MySQL sever first
by OlegTim
-->
<!DOCTYPE html>
<head>
<title> PHP </title>
<meta charset='utf-8'>
</head>
<body>

<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "root","mydb"); //serv log psw db

if ($link == false){
    print("err" . mysqli_connect_error());
}
else {
    print("server connection ok <br />");
}


$sql = 'SELECT * FROM pony ';
$result = mysqli_query($link, $sql);


 while($row = mysqli_fetch_array($result))
     {
        print_r($row); echo "<br />";
     } 

?>
</body>
</html>