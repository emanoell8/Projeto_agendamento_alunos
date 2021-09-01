<?php
    include_once 'conexao.php';
    $id = $_POST['id'];

    $query = "DELETE FROM `curso` WHERE cod_curso = $id";

    mysqli_query($conexao, $query);
    header('location:excluir_curso.php');
?>