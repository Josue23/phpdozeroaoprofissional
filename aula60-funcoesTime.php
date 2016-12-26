<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funções de Data e Tempo com a função Time</title>
</head>
<body>
	<!-- http://membros.phpdozeroaoprofissional.com.br/home/video/60 -->
	<h1>Funções de Data e Tempo com a função <a href="http://php.net/time" target="_blank">Time</a></h1>
	<a href="http://php.net/mktime" target="_blank">Função mktime</a><br><br>
	<a href="http://php.net/strtotime" target="_blank">Função strtotime - converte string em tempo</a><br><br>

	<?php
      $nextDate = date("d/m/Y", strtotime("+ 10 days"));
      $totalSegundos = time();
      echo "<hr/><br/>";
      echo  "Total de segundos desde 01/01/1970 até agora com a função time(): $totalSegundos" . "<br/><br/>";

      echo "Total de segundos desde 01/01/1970 até agora com a função  strtotime('now') " . strtotime("now") . "<br/><br/>";

      echo "Prazo de dez dias a partir de hoje é: $nextDate <br/>";


      echo "<hr/>";

	?>
    
</body>
</html>
