<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funções de Data e Tempo com a função Time</title>
    <style>
        body {
            margin-left: 5%;
        }
        h1 {
            color: #171599;
        }
        a {
          color: green;
          font-weight: 900;
          text-decoration: none;
        }
        a:hover {
          color: #fff;
          background-color: green;
        }
    </style>
</head>
<body>
	<!-- http://membros.phpdozeroaoprofissional.com.br/home/video/60 -->
	<h1>Funções de Data e Tempo com a função <a href="http://php.net/time" target="_blank">Time</a></h1>
	<a href="http://php.net/mktime" target="_blank">Função mktime</a><br><br>
	<a href="http://php.net/strtotime" target="_blank">Função strtotime - converte string em tempo</a><br><br>

	<?php

      $nextDate = date("d/m/Y", strtotime("+ 10 days"));
      $totalSegundos = time();    // horário atual em segundos
      echo "<hr/><br/>";
      ?>

      $totalSegundos = time(); <br>
      date('d/m/Y', strtotime("+2 days", $totalSegundos)) <br>
      <?php echo date('d/m/Y', strtotime("+2 days", $totalSegundos)) . "<br/><br/><br/>"; ?>

    <?php
      // função time();
      echo "Total de segundos desde 01/01/1970 até agora com a função "?>
      <a href="http://php.net/time" target="_blank">time()</a><br>
      <?php echo $totalSegundos ?>
      <br/><br/><br/>

      <?php echo "Prazo de dez dias a partir de hoje com as funções:<br/>"?>
      <a href="http://php.net/manual/en/function.date.php" target="_blank">date()</a> e 
      <a href="http://php.net/manual/en/function.strtotime.php" target="_blank">strtotime()</a>
      <?php echo $nextDate ; ?>
      <br/><br/><br/>

      <!-- função strtotime('now'); -->
      <?php echo "Total de segundos desde 01/01/1970 até agora com a função "?>
      <a href="http://php.net/strtotime" target="_blank">strtotime('now')</a><br>
      <?php echo strtotime("now") ?>
      <br/><br/><br/>


      <hr/>

    
</body>
</html>
