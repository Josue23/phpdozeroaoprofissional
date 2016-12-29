<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 66 - Introdução à criptografia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><a href="http://membros.phpdozeroaoprofissional.com.br/home/video/66" target="_blank">Aula 66</a> Aula 66 - Introdução à criptografia</h1><br>

    <div>
        <hr>
        <p>Função <a href="http://php.net/manual/en/function.md5.php" target="_blank">md5</a> criptografa a string de forma irreversível. </p><br>
        <?php
        $senha = "senha de teste";
        $senha2 = md5($senha);

        echo "Senha em texto plano <br> $senha <br><br/>";
        echo "Mesma senha criptografada com a hash md5 <br> $senha2 <br><br/>";

        echo "O hash da senha tem " . strlen($senha2). " caracteres. ";
         ?>
         <hr>
    </div>

    <div>
        <hr>
        <p>Função <a href="http://php.net/manual/en/function.base64-encode.php" target="_blank">base64_encode</a> criptografa a string de forma reversível. </p>
        <?php
        $senha = "senha de  teste";
        $senha2 = base64_encode($senha);

        echo "Senha em texto plano <br> $senha <br><br/>";
        echo "Mesma senha criptografada com o base64_encode <br> $senha2 <br><br>";


         ?>
         <p>Os testes podem ser verificados no site: <a href="https://www.base64decode.org/" target="_blank">https://www.base64decode.org/</a></p>
        <hr>
    </div>

    <div>
        <p>Função <a href="http://php.net/manual/en/function.base64-decode.php" target="_blank">base64_decode</a> descriptografa o que foi criptografado com o base64_encode</p><br>

        <?php
        echo "Senha criptografada com o base64_encode <br>";
        echo "$senha2<br><br>";

        echo "Senha descriptografa com o base64_decode <br>";
        $senha = base64_decode($senha2);
        echo "$senha<br>"; 
         ?>
    </div>

    
</body>
</html>