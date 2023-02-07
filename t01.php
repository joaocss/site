<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>arquivo em PHP </title>
</head>
<body>
 <h1> teste gat </h1>
 <?php 

$nome = $_GET["nome"];
$ano = $_GET["ano"];
$sexo = $_GET["sexo"];
$idade = date("Y") - $ano;
 
 echo "$nome e $sexo tem $idade Anos";
 ?>

<a href="tstgat.html"> Voltar</a>
</body>
</html>
