<?php

require_once('conexaologin.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $RA = $_POST['RA'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM professores WHERE RA = '$RA'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado && mysqli_num_rows($resultado) === 1) {
        $usuario = mysqli_fetch_assoc($resultado);
        if ($usuario['tipo'] == "s") {
            if (password_verify($senha, $usuario['senha'])) {
                // Login bem-sucedido
                session_start();
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_Nome'] = $usuario['Nome'];
                if ($usuario['funcao'] == "pro") {
                    $_SESSION['funcao'] = "pro";
                    header("location: ./././professores/pagprof.php");
                }
                exit();
            } else {
                $erro = "Senha incorreta";
            }
        } else {
            $erro = "Seu usuário não está ativo, procure o administrador";
        }
    } else {
        $erro = "Usuário não encontrado";
    }
}

// Se houver erros, redirecione para a página de login com a mensagem de erro
if ($erro) {
    header("location: loginprof.php?erro=" . $erro);
}
