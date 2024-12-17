<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="centro">
        <div class="caixa">
    <h1>Página de login</h1>
    <form action="cadastrado.php" method="GET">
    <label for="nome">Nome</label>
        <input type="text" name="nome" placeholder="Seu Nome" required>
    <label for="email">email</label>
        <input type="text" name="email" placeholder="seuemail@domínio"required>
    <label for="senha">Senha</label>
        <input type="password" name="senha" placeholder="Sua senha"required>
    <label for="dtaNasc">Data de nascimento</label>
        <input type="date" name="dtaNasc" required>
    <label for="telefone">Número de telefone</label>
        <input type="number" name="telefone" placeholder="(31)91111-1111" required>
    <label for="endereco">Endereço</label>
        <input type="text" name="endereco" placeholder="Rua, bairro, país" required>
    <label for="numero">Número</label>
        <input type="number" name="numero" placeholder="1111" required>
    <label for="cep">CEP</label>
        <input type="number" name="cep" placeholder="29111-111" required>
    <button type="submit">Cadastrar</button>

    </div>
</div>
</form>
</body>
</html>