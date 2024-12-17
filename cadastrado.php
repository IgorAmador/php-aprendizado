<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-toggle"></div>
            <ul>
                <li><p>Olá</p></li>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    </div>
    <?php
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $senha = $_GET["senha"];
        $dtaNasc = $_GET["dtaNasc"];
        $telefone = $_GET["telefone"];
        $endereco = $_GET["endereco"];
        $numero = $_GET["numero"];
        $cep = $_GET["cep"];

       echo '<div class="sidebar">
        <div class="sidebar-toggle"></div>
            <ul>';
                print "<li><p>Olá $nome </p></li>";
                echo '<li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    </div>';

    echo '<main><div class="centro"><div class="caixa">';
        print "<p>Nome: $nome</p>";
        print "<p>Email: $email</p>";
        print "<p>Senha: $senha</p>";
        print "<p>dtaNasc:$dtaNasc</p>";
        print "<p>Telefone: $telefone</p>";
        print "<p>Endereço: $endereco</p>";
        print "<p>Número: $numero</p>";
        print "<p>CEP: $cep</p>"; 
   echo '</div></div></main>'
    ?>


</body>
</html>