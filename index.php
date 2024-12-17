<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Digite dois números e a soma que deseja realizar</h3>
    <form action="calculado.php" method="GET">
    <label for="n1">Número um</label>
    <input type="number" name="n1" step=".01" required>
    <label for="n2">Número dois</label>
    <input type="number" name="n2" step=".01" required>
    <select name="operacao">
        <option value="somar">somar</option>
        <option value="subtrair">subtrair</option>
        <option value="multiplicar">multiplicar</option>
        <option value="dividir">dividir</option>
    </select>
    <input type="submit" value="Enviar">
</form>
</body>
</html>