<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aqui está o resultado</h1>

    <?php 
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $operacao = $_GET["operacao"];
    $resultado = 0;
        switch ($operacao){
            case 'somar':
                $resultado = $n1 + $n2;
                break;
            case 'subtrair':
               $resultado = $n1 - $n2;
                break;
            case 'multiplicar':
               $resultado = $n1 * $n2;
                break;
            case 'dividir':
                if ($n2 !=0){
                    $resultado = $n1 / $n2;
                }else{
                    print "<p>Divisão por 0 dá erro";
                }
                break;
            default:
                print "<p>Operação inválida</p>";
        }
            print "<h2>o resultado é: $resultado </h2>";
    
    ?>
</body>
</html>