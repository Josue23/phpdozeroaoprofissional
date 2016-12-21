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
    
    $nomes = array(
        array("nome" => "Bonieky", "idade" => 90),
        array("nome" => "André", "idade" => 92),
        array("nome" => "Fulano", "idade" => 12),
        array("nome" => "Cicrano", "idade" => 25)
    );

    foreach($nomes as $aluno) {
        echo "Aluno: " . $aluno["nome"] . " - Idade: " . $aluno["idade"] . "<br/>";
    }


    ?>
</body>
</html>
