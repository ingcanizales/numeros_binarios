<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de conversion</title>
</head>
<body>

    <h1>Conversor de medidas</h1>
    <p>Ingresa una medida y luego selecciona la medida de destino</p>
    <br>
    <form name="form1" method="POST" action="calcular.php">

        <p>Valor a convertir:<input type="text" id="txtvalor" name="txtvalor">
        <select name="selmedidas">
            <option value="">Seleccione...</option>
            <option value="bit">bit</option>
            <option value="byte">byte</option>
            <option value="kilobyte">kilobyte</option>
            <option value="gigabyte">gigabyte</option>
            <option value="megabyte">megabyte</option>
            <option value="terabyte">terabyte</option>
        </select>
        </p> 
        <p>Convertir a la medida de: </p>
        <p>
                <input type="radio" name="medidas" value="bit">bit
            <br><input type="radio" name="medidas" value="byte">byte
            <br><input type="radio" name="medidas" value="kilobyte">kilobyte
            <br><input type="radio" name="medidas" value="gigabyte">gigabyte
            <br><input type="radio" name="medidas" value="megabyte">megabyte
            <br><input type="radio" name="medidas" value="terabyte">terabyte
        </p>
        <p><input type="submit" name="btncalcular" value="Calcular"></p>


    </form>

    
</body>
</html>