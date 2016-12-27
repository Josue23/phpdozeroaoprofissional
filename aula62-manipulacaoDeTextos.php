<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 63 - Manipulação de strings</title>
</head>
<body>
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/63 -->
    <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/63" target="_blank">Aula 63</a> Manipulação de strings</h1>
    <p>Existem sete funções principais para manipulação de strings em PHP</p><br>

    Função <a href="http://php.net/manual/en/function.explode.php" target="_blank">explode</a> divide uma string em várias strings. <br>
    Retorna um array. <br>
    <?php 
    $nomeCompleto = "Josué Carvalho Rodrigues";
    $nomeSeparado = explode(" ", $nomeCompleto);  // separa a string pelos espaços
    print_r($nomeSeparado);
    ?>
    <br><br>

    Função <a href="http://php.net/manual/en/function.implode.php">implode</a> faz o contrário do explode. <br>
    <?php 
    $nome = array("Josué", "Carvalho", "Rodrigues");
    $nomeCompleto = implode(" ", $nome);
    print_r($nome);
    echo "<br/>Aplica-se o implode ao array \$nome<br/>";
    print_r(" $nomeCompleto com a função print_r<br/>");
    echo "$nomeCompleto com a função echo<br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.number-format.php" target="_blank">number_format</a> Format a number with grouped thousands <br>
    <?php 
    $media = number_format(86739.84645382, 2);
    echo "Padrão americano: $media<br/>";
    $media = number_format(86739.84645382, 2, ",", ".");
    echo "Padrão brasileiro: $media<br/>";
    $media = number_format(86739.84645382, 2, ",", "");
    echo "Padrão brasileiro sem separação de ponto nos milhares: $media<br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.str-replace.php" target="_blank">str_replace</a> troca uma string por outra string. <br>
    <?php 
    $texto = "O rato roeu a roupa";
    $textoAlterado = str_replace("roeu", "comeu", $texto);
    echo "Texto original: $texto<br/>";
    echo "Texto alterado: $textoAlterado<br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.strtolower.php" target="_blank">strtolower</a> transforma a string em caracteres minúsculos. <br/>
    <?php
    $texto = "O rato roeu a roupa";
    $textoMinusculo = strtolower($texto);
    echo "Texto original: $texto<br/>";
    echo "texto em minúsculo: $textoMinusculo <br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.strtoupper.php" target="_blank">strtoupper</a> transforma 
    a string em caracteres maiúsculos<br/>
    <?php
    $texto = "O rato roeu a roupa";
    $textoMaiusculo = strtoupper($texto);
    echo "Texto original: $texto<br/>";
    echo "Texto em maiúsculo: $textoMaiusculo <br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.substr.php" target="_blank">substr</a> retorna uma parte de uma string <br>
    <?php 
    $nome = "Josué Carvalho Rodrigues";
    echo "Josué Carvalho Rodrigues tem " . strlen($nome) . " caracteres. <br/>";
    $parteDoNome = substr($nome, 0, 8);
    echo "substr($nome, 0, 8)<br/>
    Resultado: $parteDoNome <br/>";
    $parteDoNomeCarva = substr($nome, 7, 5);  // string, posição inicial, qtd de casas que vai andar para a direita
    echo "$parteDoNomeCarva <br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.ucfirst.php" target="_blank">ucfirst</a> make a string's first character uppercase <br>
    <?php 
    $nome = "josué carvalho rodrigues";
    echo "String original: $nome <br/>";
    echo "String com ucfirst: " . ucfirst($nome) . "<br/><br/>";
    ?>

    Função <a href="http://php.net/manual/en/function.ucwords.php" target="_blank">ucwords</a> Uppercase the first character of each word in a string <br>
    <?php
    $nome = "josué carvalho rodrigues";
    echo "String original: $nome <br/>";
    echo "String com ucwords: " . ucwords($nome) . "<br/><br/>";
    ?>

    
</body>
</html>






















