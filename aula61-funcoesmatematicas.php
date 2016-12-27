<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 61 - funções matemáticas</title>
  </head>
  <body>
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/61 -->
    <h1>Aula 61 - funções matemáticas</h1>

    Função <a href="http://php.net/manual/en/function.abs.php" target="_blank">abs</a> (valor absoluto)<br>
    <?php
    echo "O valor absoluto de -5 é: " . abs(-5) . "<br/><br/>";
    ?>


    Função <a href="http://php.net/manual/en/function.round.php" target="_blank">round</a> (arredonda)<br>
    <?php 
    echo "O valor arredondado de 2.5 é: " . round(2.5) . "<br/><br/>" ;
    ?>


    Função <a href="http://php.net/manual/en/function.ceil.php" target="_blank">ceil</a> (arredonda para cima)<br>
    <?php 
    echo "O valor de 5.3 arredondado para cima com a função ceil é: " . ceil(5.3) . "<br/><br/>";
    ?>


    Função <a href="http://php.net/manual/en/function.floor.php" target="_blank">floor</a> (arredonda para baixo) <br>
    <?php 
    echo "O valor de 5.8 arredondado para baixo com a função floor é: " . floor(5.8) . "<br><br>";
    ?>


    Função  <a href="http://php.net/manual/en/function.rand.php" target="_blank">rand</a> (número randômico)<br>
    <span>me dar um número aleatório entre dois números, incluindo os dois números.</span><br>
    <?php 
    echo "Número aleatório entre 0 e 9: <br/>" . rand(0, 9) . "<br/><br/>";


    echo 'Uso da função rand para sortear nomes contidos em array("João", "Maria", "Ayumi", "Ami") <br/>';
    $nomes = array("João", "Maria", "Ayumi", "Ami");
    $nome = rand(0, 3);
    echo "Nome sorteado: $nomes[$nome]<br/><br/>";
    ?>


  </body>
</html>