<?php
$RM = $_GET['RM'];
$tipo = $_GET['tipo'];

include_once("conexao.php");

$stmt = "update usuarios set tipo = '$tipo' where RM = '$RM';";

mysqli_query($conn,$stmt);

header("location: telaadmin.php");

mysqli_close($conn);
?>