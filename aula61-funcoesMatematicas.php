<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 61 - funções matemáticas</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/61 -->
        <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/61" target="_blank">Aula 61 </a>Funções matemáticas</h1>

        <?php
        // exemplo de url para testar este exercício:
        // http://192.168.0.55:8080/aula61-funcoesMatematicas.php?number1=11&number2=18
        $number1 = $_GET["number1"];  // recebe o valor do parâmetro number1 através da query string
        $number2 = $_GET["number2"];  // recebe o valor do parâmetro number2 através da query string

        echo "$number1 + $number2 = " . ($number1 + $number2) . "<br/>";
        echo "$number1 - $number2 = " . ($number1 - $number2) . "<br/>";
        echo "$number1 * $number2 = " . ($number1 * $number2) . "<br/>";
        echo "$number1 / $number2 = " . ($number1 / $number2) . "<br/>";
        echo "$number1 % $number2 = " . ($number1 % $number2) . "<br/><br/>";
        ?>

        Função <a href="http://php.net/manual/en/function.abs.php" target="_blank">abs</a> (valor absoluto)<br>
        <?php
        echo "O valor absoluto de " . $number2 . " é: " . abs($number2) . "<br/><br/>";
        ?>

        Função <a href="http://php.net/manual/en/function.pow.php" target="_blank">pow</a> (potência)<br>
        <?php 
        echo "$number1 ** $number2 = " . pow($number1, $number2);
        ?>
        <br><br>

        Função <a href="http://php.net/manual/en/function.sqrt.php" target="_blank">sqrt</a> (raiz quadrada) <br>
        <?php 
        echo "Raiz quadrada de $number2 é: " . sqrt($number2);
        ?>
        <br><br>


        Função <a href="http://php.net/manual/en/function.intval.php" target="_blank">intval</a> Get the integer value of a variable <br>
        <?php 
        echo "O valor inteiro de 23.456 é: " . intval(23.456);
        ?>
        <br><br>

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