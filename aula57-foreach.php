<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula de foreach loop</title>
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
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/57  -->
    <h1>Aula de foreach loop</h1>
    <?php
    
    $alunos = array(
        array("nome" => "Bonieky", "idade" => 10),
        array("nome" => "André", "idade" => 2),
        array("nome" => "Fulano", "idade" => 12),
        array("nome" => "Cicrano", "idade" => 15)
    );

    foreach($alunos as $aluno) {
        echo "Aluno: " . $aluno["nome"] . " - Idade: " . $aluno["idade"] . "<br/>";
    }


    ?>
</body>
</html>
