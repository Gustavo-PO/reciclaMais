<?php

require_once '../../database/connect.php';

session_start();
ob_start();
$idUser = false;
$userInfos = false;


if (!empty($_GET)) {
    if (!empty($_GET['logout']) && $_GET['logout'] == 'true') {
        logoutUser();
    }
}

if (!empty($_POST)) {
    if (isset($_POST['action-form']) && $_POST['action-form'] == 'login') {
        $sql = "SELECT * FROM usuarios 
    WHERE email = '" . $_POST['email'] . "' 
    AND senha = '" . $_POST['senha'] . "';";

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $userInfos = $result->fetch_object();

            $_SESSION['session_id'] = session_id();
            $_SESSION['id_user'] = $userInfos->id_user;
            $_SESSION['nome'] = $userInfos->nome;
            $_SESSION['email'] = $userInfos->email;
            $_SESSION['senha'] = $userInfos->senha;

            unset($_POST);
        } else {
            echo "<script>alert('Email ou senha incorretos!');</script>";
            unset($_POST);
        }
    } else if (isset($_POST['action-form']) && $_POST['action-form'] == 'register') {

        $isUpdate = isset($_SESSION['id']);

        try {
            if ($isUpdate) {

                $sql = "UPDATE usuarios SET 
                        nome = '" . $_POST['nome'] . "',
                        email = '" . $_POST['email'] . "',
                        senha = '" . $_POST['senha'] . "',
                        WHERE id_user = " . $_SESSION['id_user'] . "
                        ";
                $result = $con->query($sql);

                $sql = "SELECT * FROM usuarios 
                WHERE email = '" . $_POST['email'] . "' 
                AND senha = '" . $_POST['senha'] . "';";

                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $userInfos = $result->fetch_object();

                    $_SESSION['session_id'] = session_id();
                    $_SESSION['id_user'] = $userInfos->id_user;
                    $_SESSION['nome'] = $userInfos->nome;
                    $_SESSION['email'] = $userInfos->email;
                    $_SESSION['senha'] = $userInfos->senha;

                    unset($_POST);
                }
            } else {
                $sql = "
                        INSERT INTO usuarios 
                        (nome, email, senha) 
                        VALUES (
                            '" . $_POST['nome'] . "',
                            '" . $_POST['email'] . "',
                            '" . $_POST['senha'] . "'
                        )
                        ";
                $result = $con->query($sql);

                $sql = "SELECT * FROM usuarios 
                        WHERE email = '" . $_POST['email'] . "' 
                        AND senha = '" . $_POST['senha'] . "';";

                $result = $con->query($sql);
                $_SESSION['session_id'] = session_id();
                $userInfos = $result->fetch_object();
                $_SESSION['id_user'] = $userInfos->id_user;
                $_SESSION['email'] = $userInfos->email;
                $_SESSION['senha'] = $userInfos->senha;
                $_SESSION['nome'] = $userInfos->nome;
            }
        } catch (Exception $e) {
            echo "Deu erro" . $e->getMessage();
        }
    }
}


function isUserLoggedIn()
{
    // Verifica se o usuário está logado e se o session_id() é válido
    if (isset($_SESSION['session_id']) && $_SESSION['session_id'] === session_id()) {
        header("Location: home.php");
        return true; // Usuário está logado
    } else {
        return false; // Usuário não está logado
    }
}

function logoutUser()
{
    // Limpa todas as variáveis de sessão
    $_SESSION = array();

    // Destrói a sessão
    session_destroy();
    unset($_POST);

    // Redireciona para a página de login (ou qualquer outra página)
    header("Location: ?page=home.html");
    exit;
}

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
                <?php
                if (isUserLoggedIn() == true) {
                ?>
                    <li><a href="home.html">Recompensas</a></li>
                <?php
                } 
                ?>
                    <li><a href="home.html">Sobre Nós</a></li>
                    <li><a href="login.php" class="active"><i class="fa-solid fa-circle-user"></i> Login</a></li>
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
                    <a id="btnMostrarLogin">Já tenho conta</a>
                </p>
            </div>

        </div>
    </body>

<script src="../../assets/js/login.js"></script>

</html>