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

    <title>Escolha sua função</title>
</head>

<body>
    <main id="container">
        <form id="login_form" method="post" action="index.php">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Escolha sua <br>função</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <?php
require_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $funcao = $_POST['funcao'];

    $sql = "INSERT INTO cadastro VALUES (null, '$funcao', 'n')";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "função escolhida com sucesso";

        // Remova o fetch_assoc, pois você não precisa dele nesta parte do código

        switch ($funcao) {
            case 'alu':
                header('location: cadastroaluno.php');
                exit(); // Importante: certifique-se de sair após o redirecionamento
                break;
            case 'pro':
                header('location: cadastroprof.php');
                exit(); // Importante: certifique-se de sair após o redirecionamento
                break;
            case 'fun':
                header('location: cadastrofun.php');
                exit(); // Importante: certifique-se de sair após o redirecionamento
                break;
            case 'ter':
                header('location: cadastroter.php');
                exit(); // Importante: certifique-se de sair após o redirecionamento
                break;
            default:
                echo "Erro na escolha da função: " . mysqli_error($conexao);
                break;
        }
    }
}
?>

                <a id="linkcadastro" href="../loginphp/login.php">Já possui uma conta?</a>


            </div>

            

            <select name="funcao">
                <option value="alu">Aluno</option>
                <option value="pro">Professor</option>
                <option value="fun">Funcionário</option>
                <option value="ter">Terceirizado</option>
            </select>

            

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