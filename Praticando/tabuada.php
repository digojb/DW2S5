<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h1>Tabuada</h1>
        <hr />
        <form method="GET" action="">
            <div class="form-group">
                <label for="valor">Digite um valor:</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <button type="submit" class="btn btn-success mr-2">Enviar</button>
            <button type="button" class="btn btn-warning" onclick="limpar()">Limpar</button>
            <hr />
        </form>

        <?php
        if (isset($_GET['valor'])) {
            $valor = $_GET['valor'];
            echo "<h2>Tabuada do $valor</h2>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $valor * $i;
                echo "$valor x $i = $resultado";
                echo "<br>";
                echo "<br>";
            }
            echo "</table>";
        }
        ?>
        <script>
        function limpar() {
            document.getElementById('valor').value = '';
            document.querySelector('table').innerHTML = '';
        }
        </script>
    </div>
</body>

</html>