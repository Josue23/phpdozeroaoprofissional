<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Funções de Data e Tempo com a função date</title>
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
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/59  -->
   <h1>Funções de Data e Tempo com a função <a href="http://php.net/manual/en/function.date.php">date</a></h1>

<?php
    // dia da semana por extenso, com três letras
    $diaSemana_D = date("D");

    // data de hoje  (numérico) com zero à esquerda
    $dataAtual_d = date("d");

    // data de hoje (numérico) sem zero à esquerda
    $dataAtual_j = date("j");

    // dia do mês, ordinal  (1º, 2º, ...)
    $dataAtual_S = date("S");

    // mês atual por extenso, nome completo
    $mesAtual_F = date("F");

    echo "Today is the $dataAtual_d$dataAtual_S day of $mesAtual_F " . "<br><br>";


    ?>

    <br>
    <br>

    <a href="http://php.net/manual/en/function.date.php" target="_blank">Documentação da função date:
    <br>
    http://php.net/manual/en/function.date.php
    </a>

</body>
</html>
