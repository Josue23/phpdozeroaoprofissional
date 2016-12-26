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
	<a href="http://php.net/strtotime" target="_blank">Função strtotime</a><br><br>

	<?php
      $totalSegundos = time();
      echo "<hr/><br/>";
      echo  "Total de segundos desde 01/01/1970 até agora: $totalSegundos" . "<br/><br/>";

      echo "<hr/>";

	?>
    
</body>
</html>
