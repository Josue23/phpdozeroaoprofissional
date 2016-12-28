<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 58 - Funções</title>
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
   <h1>Aula 58 - Funções</h1>
<!-- http://membros.phpdozeroaoprofissional.com.br/home/video/58  -->

   <?php
    // cria a função
    // não é obrigatório passar parâmetros na criação da função
    function somarNumero($x, $y) {
        $result = $x + $y;
        return $result;
    } 
    // imprime o resultado da função
    // não é obrigatório passar parâmetros na execução da função
    echo "Resultado: " . somarNumero(10,20) . "<br/>";



    // cria função sem parâmetros
    function mostrarNome() {
        return "Josué";
    }
    // chama a função sem parâmetros
    echo "Meu nome é " . mostrarNome();
    ?>
</body>
</html>
