<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Contador</title>
</head>

<body>
    <div class="container mt-5">
        <h1>Contador</h1>
        <hr />
        <h2>Parâmetros informados:</h2>
        <p>Início: <?= $_POST["inicio"] ?></p>
        <p>Final: <?= $_POST["final"] ?></p>
        <p>Incremento: <?= $_POST["incremento"] ?></p>

        <?php

        $inicio = $_POST["inicio"];
        $final = $_POST["final"];
        $incremento = $_POST["incremento"];

        if ($inicio > $final) {
            for ($i = $inicio; $i >= $final; $i -= $incremento) {
                echo $i;
            }
        } else {
            for ($i = $inicio; $i <= $final; $i += $incremento) {
                echo $i . " ";
            }
        }
        
        ?>
    </div>
</body>

</html>