<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Antecessor</title>
</head>
<body>
<h1>O seu resultado é:</h1>
    <div class="centro">
            <div class="caixa">
    <?php
        $numero = $_GET["numero"];
        $menor = $numero - 1;
        $maior = $numero + 1;
        print "<P>O número é: $numero</p>";
        print "<p>O antecessor é: $menor</p>";
        print "<p>O sucessor é: $maior</p>";
    ?>
    </div>
</div>
</body>
</html>