<?php
    include_once 'conexao.php';
    $id = $_POST['id'];

    $query = "DELETE FROM `matricula` WHERE cod_matricula = $id";

    mysqli_query($conexao, $query);
    header('location:ver_curso.php');
?>