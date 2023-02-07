<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>arquivo em PHP </title>
</head>
<body>
 <h1> minha tautau </h1>
 <?php 

$valor = $_GET["v"];
$rq = sqrt($valor);

echo " o valor enviado é  $valor" ;

echo " A raiz quadrada é " . number_format($rq,2);
 ?>
<a href="tstgat.html"> Voltar</a>
</body>
</html>


