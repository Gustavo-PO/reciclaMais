<?php
require_once __DIR__ . '/../../database/connect.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="" href="../../assets/css/home.css">
    <title>ReciclaMais - Home</title>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="home.php">ReciclaMais</a>
            </div>
            <ul class="nav-links">
                <li><a href="home.php">Início</a></li>
                <li><a href="about.php">Sobre Nós</a></li>
                <li><a href="contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="text-center">
            <div class="text-content">
                <h2>Bem-vindo ao ReciclaMais</h2>
                <p>Junte-se a nós na missão de tornar o mundo um lugar mais sustentável!</p>
                <a href="about.php" class="btn">Saiba Mais</a>
            </div>
        </section>
    </main>

</body>

</html>