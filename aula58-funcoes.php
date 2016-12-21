<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 58 - Funções</title>
</head>
<body>
   <h1>Aula 58 - Funções</h1>

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
