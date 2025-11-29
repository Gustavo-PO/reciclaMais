<?php
require_once 'log.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ReciclaMais</title>
    <link rel="stylesheet" href="../../assets/css/home.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <script src="https://kit.fontawesome.com/71e3785a50.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="home.php">
                    <i class="fa-solid fa-recycle"></i>
                    ReciclaMais
                </a>
            </div>
            <ul class="nav-links">
                <li><a href="home.php">Início</a></li>
                <li><a href="../pages/home.html#comofunciona">Como funciona</a></li>
                <li><a href="../pages/home.html#aprenda">Aprenda</a></li>
                <li><a href="home.html">Sobre Nós</a></li>
                 <?php
                if (isUserLoggedIn() == true) {
                ?>
                <li><a href="login.php"><i class="fa-solid fa-circle-user"></i>LogOut</a></li>
                <?php
                }else{
                ?>
                <li><a href="login.php"><i class="fa-solid fa-circle-user"></i>Login</a></li>
                <?php
                }
                ?>                    
            </ul>

        </nav>
    </header>

    <body>
        <div class="container">
            <div class="header">
                <h1>Cuidar do planeta ficou mais fácil.</h1>
                <p>Faça login e comece hoje.</p>
            </div>

            <div class="card ativo">
                <h2>Login</h2>

                <form method="POST" action="" name="userForm">
                    <input type="hidden" name="action-form" value="login">
                    <div class="form-group">
                        <label for="login-email">E-mail</label>
                        <div class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="login-email" name="email" placeholder="seu@email.com" onblur="validateEmail(this)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Senha</label>
                        <div class="input-container">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="login-password" name="senha" placeholder="Sua senha" required>
                        </div>
                    </div>

                    <button type="submit" class="btn">Entrar</button>

                    <div class="forgot-password">
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                </form>
                <p class="link-cadastro">
                    Nao tem uma conta?
                    <a id="btnMostrarRegister">Criar conta</a>
                </p>
            </div>

            <div class="cardCriar">
                <h2>Criar conta</h2>

                <form method="POST" action="" name="userForm">
                    <input type="hidden" name="action-form" value="register">
                    <div class="form-group">
                        <label for="criar-nome">Nome</label>
                        <div class="input-container">
                            <i class="fa-solid fa-circle-user"></i>
                            <input type="text" id="criar-nome" name="nome" placeholder="Seu nome" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-email">E-mail</label>
                        <div class="input-container">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="login-email" name="email" placeholder="seu@email.com" onblur="validateEmail(this)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-password">Senha</label>
                        <div class="input-container">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="login-password" name="senha" placeholder="Sua senha" required>
                        </div>
                    </div>

                    <button type="submit" class="btn">Criar</button>
                </form>
                <p class="link-cadastro">
                    Já tem uma conta?
                    <a id="btnMostrarLogin">Já tenho conta</a>
                </p>
            </div>

        </div>
    </body>

<script src="../../assets/js/login.js"></script>

</html>