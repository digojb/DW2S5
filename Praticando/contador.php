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
        <form action="contador-destino.php" method="post" class="col-3">
            <label for="">Início:</label>
            <input type="number" id="inicio" name="inicio" class="form-control mb-3" />
            <label for="">Final:</label>
            <input type="number" id="final" name="final" class="form-control mb-3" />
            <label for="">Incremento:</label>
            <input type="number" id="incremento" name="incremento" class="form-control mb-3" />
            <button type="submit" class="btn btn-success mr-2">Enviar</button>
            <button type="button" class="btn btn-warning" onclick="limpar()">Limpar</button>
        </form>
    </div>

</body>

</html>