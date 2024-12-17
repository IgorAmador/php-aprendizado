<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar com Hover</title>
    <style>/* Estilos Gerais */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
}

/* Sidebar */
.sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 60px; /* Largura retraída */
    background-color: #333;
    color: white;
    transition: width 0.3s ease;
    overflow: hidden; /* Oculta o conteúdo interno */
}

.sidebar:hover {
    width: 200px; /* Largura expandida */
}

/* Conteúdo Interno da Sidebar */
.sidebar ul {
    list-style: none;
    padding: 20px 0;
    margin: 0;
    opacity: 0; /* Torna o conteúdo invisível */
    transition: opacity 0.3s ease; /* Animação suave */
}

.sidebar:hover ul {
    opacity: 1; /* Torna o conteúdo visível ao expandir */
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background 0.2s ease;
}

.sidebar ul li a:hover {
    background-color: #555;
}

/* Sidebar Toggle */
.sidebar .sidebar-toggle {
    position: absolute;
    top: 50%;
    right: -10px;
    width: 20px;
    height: 40px;
    background-color: #333;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
}

/* Conteúdo Principal */
main {
    margin-left: 60px; /* Espaço inicial com a sidebar retraída */
    padding: 20px;
    flex: 1;
    transition: margin-left 0.3s ease;
}

.sidebar:hover ~ main {
    margin-left: 200px; /* Ajusta o conteúdo ao expandir a sidebar */
}
</style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-toggle"></div>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
    <main>
        <h1>Conteúdo Principal</h1>
        <p>Adicione o conteúdo do site aqui.</p>
    </main>
</body>
</html>
