<?php
$funcao = $_GET['funcao'];
$id = $_GET['id'];

include_once("conexao.php");


$stmt = "update usuarios set funcao = '$funcao' where id = '$id';";

mysqli_query($conn,$stmt);

$stmt2 = "update professores set funcao = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt2);

$stmt3 = "update funcionarios set funcao = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt3);

$stmt4 = "update tercerizados set funcao = '$funcao' where id = '$id';";
mysqli_query($conn, $stmt4);

header("location: telaadmin.php");

mysqli_close($conn);
?>