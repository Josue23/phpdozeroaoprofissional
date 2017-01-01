<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 64 - Manipulação de arrays</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/64" target="_blank">Aula 64 </a> Manipulação de arrays </h1>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.array-keys.php" target="_blank">array_keys</a> retorna um array somente com as chaves do array que eu especificar. <br>
      <?php
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
      $array2 = array_keys($aluno);
      print_r($array2);

      echo "<br/>Ou<br/>";

      print_r(array_keys($aluno));
      ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.array-values.php" target="_blank">array_values</a> Return all the values of an array <br>
      <?php 
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
       $array2 = array_values($aluno);
      print_r($array2);

      echo "<br/>Ou<br/>";

      print_r(array_values($aluno));             
       ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.array-pop.php" target="_blank">array_pop</a> remove o último ítem do array <br>
      <?php 
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
       print_r($aluno);
       echo "<br/>";
      
       echo "<br/>Aplica o array_pop (retira o último registro do array)<br/>";
       array_pop($aluno);
       print_r($aluno);      
       ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.array-shift.php" target="_blank">array_shift</a> remove o primeiro ítem do array <br>
      <?php
       $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
       print_r($aluno);
       echo "<br/><br/>";

       echo "Aplica o array_shift (retira o primeiro registro do array)<br/>";
       array_shift($aluno);
       print_r($aluno);
       ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.asort.php" target="_blank">asort</a> ordena o array, mantendo a associação entre os índices e valores correspondentes. <br>
      <?php 
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
      print_r($aluno);
      echo "<br/><br/>";

      echo "Ordenando pela ordem alfabética dos valores:<br/>";
      asort($aluno);
      print_r($aluno);
       ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.arsort.php" target="_blank">arsort</a> ordena o array na ordem reversa, mantendo a associação entre os índices e valores correspondentes. <br>
      <?php 
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
      print_r($aluno);
      echo "<br/><br/>";

      echo "Ordenando na ordem inversa pela ordem alfabética dos valores:<br/>";
      arsort($aluno);
      print_r($aluno);
       ?>      
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.count.php" target="_blank">count</a> Count all elements in an array, or something in an object <br>
      <?php 
      $aluno = array(
          nome => "Josué",
          "idade" => 90,
          "cidade" => "São paulo",
          "pais" => "Brasil"
       );
      print_r($aluno);
      echo "<br/><br/>";

      echo "Total de registros no meu array: " . count($aluno);
       ?>
      <hr>
    </div>

    <div>
      <hr>
      Função <a href="http://php.net/manual/en/function.in-array.php" target="_blank">in_array</a> Checks if a value exists in an array. <br>
      Geralmente é usado dentro da estrutura condicional if <br><br>
      <?php 
      $vencedores = array(
        "José",
        "Josué",
        "Maria",
        "Danila"
      );
      print_r($vencedores);
      echo "<br/><br/>";

      echo "Verifica se um nome está no array: <br/>";
      if (in_array("Maria", $vencedores)) {
        echo "Maria é um dos campeões.<br/>";
      }
       ?>
      <hr>
    </div>
    
</body>
</html>













