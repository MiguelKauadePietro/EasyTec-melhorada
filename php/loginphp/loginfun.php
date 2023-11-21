<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../imagens/EASYTEC.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../CSS/login.css">

    <title>Login</title>
</head>
<body>
    <main id="container">
    <!-- <i id="mode_icone2" class="fa-solid fa-moon"></i> -->
        <form id="login_form" method="post" action="logarfun.php">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <!-- INPUTS -->
            <div id="inputs">
                <!-- EMAIL -->
                <div class="input-box">
                    <label for="RM">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="Email" name="Email" placeholder="Ex: champs@email.com"  required>
                        </div>
                    </label>
                </div>

                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Senha
                        <div class="input-field">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" id="password" name="senha" placeholder="Ex: 102030" required>
                        </div>
                    </label>
               
                </div>
                <a href="../cadastrophp/cadastrofun.php">Não tem uma conta?</a>
                <p>
                    <?php
                        if(isset($_GET["erro"])){
                            echo $_GET["erro"];
                        }
                    ?>

                </p>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Login
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="login.js"></script>
</body>
</html>