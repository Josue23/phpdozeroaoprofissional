<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 63 - Manipulação de strings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/63 -->
    <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/63" target="_blank">Aula 63</a> Manipulação de strings</h1>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.explode.php" target="_blank">explode()</a> divide uma string em várias strings. <br>
        <?php 
        $nomeCompleto = "Josué Carvalho Rodrigues";
        echo 'String: "Josué Carvalho Rodrigues"<br/>';
        echo "Retorna um array a partir da string: <br/>";

        $nomeSeparado = explode(" ", $nomeCompleto);  // separa a string pelos espaços
        print_r($nomeSeparado);
        print_r("<br/><br/>");

        print_r("Abaixo, o mesmo exemplo com ") ?>
        <a href="http://php.net/manual/en/function.var-dump.php" target="_blank">var_dump()</a><br/>
        <?php var_dump($nomeSeparado);  ?>
        <br><br>

        <?php print_r("Abaixo, o mesmo explode com ");  ?>
        <a href="http://php.net/manual/en/function.var-export.php" target="_blank">var_export()</a><br>
        <?php var_export($nomeSeparado); ?>
        <br><br><hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.trim.php">trim()</a> Retira espaço no ínicio e final de uma string <br>
        <?php 
        $nome = "   José da Silva   ";
        echo ("'   José da Silva   ' tem " . strlen($nome) . " caracteres. <br/>");
        echo ("Três caracteres antes da string e três caracteres no final da string. <br/><br/>");
        $nome = trim($nome);
        echo "Aplicando o trim nesta string e retirando os espaços no inicio e no final da string: <br/>";
        echo ("$nome agora tem " . strlen($nome) . " caracteres.<br/>");
        ?>
        A função <a href="http://php.net/manual/pt_BR/function.ltrim.php">ltrim()</a> retira os espaços somente à esquerda <br>
        A função <a href="http://php.net/manual/pt_BR/function.rtrim.php">rtrim()</a> retira os espaços somente à direita da string <br>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/pt_BR/function.str-word-count.php">str_word_count()</a> conta a quantidade de palavras que existe em uma string. <br>
        <?php 
        $frase = "Eu vou estudar PHP agora";
        echo ("A frase $frase tem " . str_word_count($frase, 0) . " palavras.<br/><br/>");

        print_r("Array gerado a partir da frase $frase: <br/> ");
        print_r(str_word_count($frase, 1));
        echo "<br/><br/>";

        print_r("Array associativo gerado a partir da frase $frase: <br/> ");
        print_r(str_word_count($frase, 2));
        echo "<br/>'Eu' começa na posição [0] <br/>";
        echo "'vou' começa na posição [3] <br/>";
        echo "'estudar' começa na posição [7] <br/>";
        echo "Assin sucessivamente .........";

        ?>
        <br/><hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.implode.php">implode()</a> faz o contrário do explode. <br>
        Posso usar a função <a href="http://php.net/manual/pt_BR/function.join.php" target="_blank">join</a> que faz a mesma coisa do implode. <br><br>
        Exemplos dom o implode: <br>
        <?php 
        $nome = array("Josué", "Carvalho", "Rodrigues");
        $nomeCompleto = implode(" ", $nome);
        print_r($nome);

        echo '<br/>Aplica-se o implode ao array("Josué", "Carvalho", "Rodrigues")<br/><br/>';

        print_r(" $nomeCompleto com a função print_r<br/>");
        echo "$nomeCompleto com a função echo<br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.number-format.php" target="_blank">number_format()</a> Format a number with grouped thousands <br>
        <?php 
        $media = number_format(86739.84645382, 2);
        echo "Padrão americano: $media<br/>";
        $media = number_format(86739.84645382, 2, ",", ".");
        echo "Padrão brasileiro: $media<br/>";
        $media = number_format(86739.84645382, 2, ",", "");
        echo "Padrão brasileiro sem separação de ponto nos milhares: $media<br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.str-replace.php" target="_blank">str_replace()</a> troca uma string por outra string. <br>
        <?php 
        $texto = "O rato roeu a roupa";
        $textoAlterado = str_replace("roeu", "comeu", $texto);
        echo "Texto original: $texto<br/>";
        echo "Texto alterado: $textoAlterado<br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.strtolower.php" target="_blank">strtolower()</a> transforma a string em caracteres minúsculos. <br/>
        <?php
        $texto = "O rato roeu a roupa";
        $textoMinusculo = strtolower($texto);
        echo "Texto original: $texto<br/>";
        echo "texto em minúsculo: $textoMinusculo <br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.strtoupper.php" target="_blank">strtoupper()</a> transforma 
        a string em caracteres maiúsculos<br/>
        <?php
        $texto = "O rato roeu a roupa";
        $textoMaiusculo = strtoupper($texto);
        echo "Texto original: $texto<br/>";
        echo "Texto em maiúsculo: $textoMaiusculo <br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.substr.php" target="_blank">substr()</a> retorna uma parte de uma string <br>
        <?php 
        $nome = "Josué Carvalho Rodrigues";
        echo "Josué Carvalho Rodrigues tem " . strlen($nome) . " caracteres. <br/>";
        $parteDoNome = substr($nome, 0, 8);
        echo "substr($nome, 0, 8)<br/>
        Resultado: $parteDoNome <br/>";
        $parteDoNomeCarva = substr($nome, 7, 5);  // string, posição inicial, qtd de casas que vai andar para a direita
        echo "$parteDoNomeCarva <br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.ucfirst.php" target="_blank">ucfirst()</a> make a string's first character uppercase <br>
        <?php 
        $nome = "josué carvalho rodrigues";
        echo "String original: $nome <br/>";
        echo "String com ucfirst: " . ucfirst($nome) . "<br/><br/>";
        ?>
        <hr>
    </div>

    <div>
        <hr>
        Função <a href="http://php.net/manual/en/function.ucwords.php" target="_blank">ucwords()</a> Uppercase the first character of each word in a string <br>
        <?php
        $nome = "josué carvalho rodrigues";
        echo "String original: $nome <br/>";
        echo "String com ucwords: " . ucwords($nome) . "<br/><br/>";
        ?>
        <hr>
    </div>

</body>
</html>