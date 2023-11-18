<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../../CSS/cadastro.css">

    <title>Cadastro - Funcionário</title>
</head>

<body>
    <main id="container">
    <!-- <i id="mode_icone2" class="fa-solid fa-moon"></i> -->
        <form id="login_form" method="post" action="cadastrofun.php">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Cadastro</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>
            <?php

            //requerindo a conexao com o BD
            require_once('conexao.php');


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if(!empty($_POST['Nome'])) {
                $nome = $_POST['Nome'];
                $Email = $_POST['Email'];
                $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

                //inserindo os campos
                $sql = "INSERT INTO funcionarios VALUES (null, '$nome', '$Email', '$senha','n','fun')";

                //verificando os dados no banco
                if (mysqli_query($conexao, $sql)) {
                    echo "Cadastro realizado com sucesso!";


                } else {
                    echo "Erro ao cadastrar: " . mysqli_error($conexao);
                }
            }
            }
            ?>
            <!-- INPUTS -->
            <div id="inputs">
                <!-- Nome -->
                <div class="input-box">
                    <label for="Nome">
                        Nome
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" name="Nome" placeholder="Ex: jandira da silva" required>
                        </div>
                    </label>
                </div>
                <div class="input-box">
                    <label for="Email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="Email" name="Email" placeholder="Ex: champs@email.com" required>
                        </div>
                    </label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="senha" placeholder="Ex: 102030" required>
                        </div>
                    </label>
                </div>

                <a id="linkcadastro" href="../loginphp/loginfun.php">Já possui uma conta?</a>

            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Cadastrar
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="cadastro.js"></script>
</body>

</html>