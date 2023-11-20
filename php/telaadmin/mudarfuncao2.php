<?php
$RM = $_GET['RM'];
$funcao = $_GET['funcao'];
$id = $_GET['id'];

include_once("conexao.php");


$stmt = "update usuarios set funcao = '$funcao' where id = '$id';";

mysqli_query($conn,$stmt);

$stmt2 = "update professores set tipo = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt2);

$stmt3 = "update funcionarios set tipo = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt3);

$stmt4 = "update tercerizados set tipo = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt4);

header("location: telaadmin.php");

mysqli_close($conn);
?>