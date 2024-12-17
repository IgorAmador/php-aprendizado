<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Convertido</title>
</head>
<body>
    <h1>Conversor</h1>
    <div class="centro">
        <div class="caixa">
    <?php 
        $numero = $_GET["numero"] / 5.80;
        $numero = number_format($numero, 2, '.', '');
        print "<p>O valor convertido de reais para dólar é $numero</p>"
    ?>
    </div>
</div>
</body>
</html>