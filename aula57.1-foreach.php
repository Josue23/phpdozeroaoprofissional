<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula de foreach loop</title>
</head>
<body>
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/57  -->
    <h1>Aula de foreach loop</h1>
    <?php
    
    $aluno = array(
        "nome" => "Bonieky",
        "idade" => 90,
        "estado" => "PB",
        "pais" => "Brasil"
    );

    foreach($aluno as $chave => $valor) {
        echo $chave . " = " . $valor . "<br/>";
    }


    ?>
</body>
</html>
