<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" prefix="og: http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>

<style>
body{
backgroud-color: #8080da ;

}
</style>
back
<meta charset="UTF-8" http-equiv="Content-Type"/>
<link rel="shortcut icon" href="preco-baixo.ico"type=image/x-icon">
<title> Primeiro programa em PHP</title>
</head>
<body>
<h1> testando PHP</h1>
<img src="bingo.png" alt="logo html ">

<?php
 print "mais um";
$idade = 3;
$ano = 5;

$elevai = ($idade + $ano);
 echo "<h1> $elevai </h1>";

echo "<h1> hello world !</h1>";

echo"<h1> separador </h1>";

for($i =1; $i < 20; $i++){
  echo "<h1>O Valor de I = </h1>".$id;
}

print"<h1> separador </h1>";
for($i =1; $i < 20; $i++){
  echo "Upload ".$i.": <input type='text' name='".$i."'/><br/>";
}
print"<h1> separador </h1>";
for ($i=0; $i < 10; $i++) {
    echo $i."<br>";
}

print"<h1> separador </h1>";

for ($i = 0; $i < 10; $i++):
    echo $i."<br>";
endfor;


print"<h1> separador while 01 </h1>";

while( ++$i < 10 ); // look ma, no brackets!

echo $i; // 10

print"<h1> separador 02</h1>";

$i = 1;
while ($i <= 10):
    echo $i;
    ++$i;
endwhile;


?>
</body>
</html>