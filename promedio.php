<html lang="es">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio</title>
</head>
<body>

    <h2>Ingresa tu promedio</h2>
    <form method="POST">
        <label for="cant1">Cantidad 1:</label>
        <input type="number" name="cant1" required><br><br>

        <label for="cant2">Cantidad 2:</label>
        <input type="number" name="cant2" required><br><br>

        <label for="cant3">Cantidad 3:</label>
        <input type="number" name="cant3" required><br><br>

        <input type="submit" name="calcular" value="Promedio">
    </form>

    <?php
    if(isset($_POST['calcular'])) {
        $cant1 = $_POST['cant1'];
        $cant2 = $_POST['cant2'];
        $cant3 = $_POST['cant3'];

        $promedio = ($cant1 + $cant2 + $cant3) / 3;

        echo "El promedio es: $promedio <br>";
    }
    ?>

 </body>
</html>