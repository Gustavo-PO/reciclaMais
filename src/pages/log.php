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
            header("Location: home.php");
            $userInfos = $result->fetch_object();

            $_SESSION['session_id'] = session_id();
            $_SESSION['id_user'] = $userInfos->id_user;
            $_SESSION['nome'] = $userInfos->nome;
            $_SESSION['email'] = $userInfos->email;
            $_SESSION['senha'] = $userInfos->senha;
            
            unset($_POST);
        }else{
            echo "<script>alert('Email ou senha incorretos. Tente novamente.');</script>";
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
                header("Location: home.php");
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
    header("Location: home.php");
    exit;
}

?>