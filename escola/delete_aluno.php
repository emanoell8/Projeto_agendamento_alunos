<?php
    include_once 'conexao.php';
    $id = $_POST['id'];

    $query = "DELETE FROM `aluno` WHERE codigo = $id";

    mysqli_query($conexao, $query);
    header('location:ver_aluno.php');
?>