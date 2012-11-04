<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BMI</title>
<style type="text/css">

#container {
	height: 400px;
	width: 1024px;
	background-color: #E3E3E3;
	margin-top: 30px;
	margin-right: auto;
	margin-bottom: 0px;
	margin-left: auto;
}
body {
	background-color: #C4C4C4;
}
#container #content font {
	padding-left: 400px;
}
#container #content {
	padding-left: 20px;
	padding-right: 20px;
}
#container #content pro {
	float: right;
}
</style>
</head>

<body>
<div id="container">
<div id="content">
<font color=red size=+2>Vasi podaci:</font> </br>

Vasa tezina je: <?php echo $_GET["tezina"]; ?> kg.<br />
Vasa visina je: <?php echo $_GET["visina"]; ?> cm.<br />
</br>

<?php

$tezina = $_REQUEST['tezina'];
$visina = $_REQUEST['visina'];
 if ($tezina<=0 or $visina<=0 or strlen($visina)==0 or strlen($tezina)==0){ echo 'GRESKA! Uneli ste neispravne podatke! Molimo Vas da unesete prave podatke i pokusate ponovo klikom ', print( '<a href="index.html">OVDE</a>' );
die();
 }
$rezultat=0;
$rezultat=(($tezina)/(($visina/100)*($visina/100)));
$idealnatezina1=24.8*(($visina/100)*($visina/100)); 
$idealnatezina2=18.6*(($visina/100)*($visina/100)); 

echo "<h1>Vas BMI je: ",round($rezultat,2), "</h1>\n";
if ($rezultat<=18.5) echo 'Pothranjeni ste! Da bi Vasa tezina bila u skladu sa visinom, marate imati bar ', round($idealnatezina2),' kilograma.';
if ($rezultat>18.5 and $rezultat<=24.9) echo 'Vasa tezina je u skladu sa visinom!';
if ($rezultat >25 and $rezultat<=29.9) echo 'Imate preteranu tezinu! Da bi Vasa tezina bila u skladu sa visinom, morate imati bar ', round($idealnatezina1),' kilograma.';
if ($rezultat>=30) echo 'Vas BMI znaci da ste gojazni! Da bi Vasa tezina bila u skladu sa visinom, morate imati bar ', round($idealnatezina1),' kilograma.';


?>
<hr />
<pro>Ivan Jezdovic</pro>
</div>
</div>
</body>
</html>