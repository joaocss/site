<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css"/>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>arquivo em PHP </title>
</head>
<body>
 <h1> Teste 03 cores</h1>

 <?php

$txt = isset($_GET["txt"])?$_GET["txt"]:"texto generico;

$tam = isset($_GET["tam"]) ?$_GET["tam"]:"12pt";

$cor = isset($_GET["cor"]) ?$GET["cor]:"#000000";



echo $txt;

 ?>
</body>
</html>