<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula de while loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- http://membros.phpdozeroaoprofissional.com.br/home/video/55  -->
    <h1>Aula de while loop</h1>

    <?php
    $x = 1;
    $n = 3;

    echo "<br />" . "Dez primeiros múltiplos de 3" . "<br /><br />";
    while($x <= 10) {
        $parcial = $x * $n;
        echo "$x x $n = $parcial " . "<br>";
        $x++;
        /* $n++; */
    }
    ?>

</body>
</html>









