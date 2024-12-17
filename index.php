<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Conversors</title>
</head>
<body>   
    <div class="centro">
        <div class="caixa">
        <p>Escreva um valor em reais para ser convertido para dólares</p>
        <form action="conversor.php" method="get">
            <label for="numero">Numero</label>
                <input type="number" name="numero" step=".01" required>
                    <input type="submit" value="Enviar">
        <p>Considere que na data que esse site foi feito o dólar estava 5,80 reais</p>
        </div>
    </div>
</body>
</html>