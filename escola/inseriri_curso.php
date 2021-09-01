<?php
include_once 'conexao.php';

    $nome = $_POST['nome'];
    $carga = $_POST['carga'];
    $area = $_POST['area'];

    $query = "INSERT INTO curso(nome, carga, area) 
              values('$nome', $carga, '$area')";

    mysqli_query($conexao, $query);
    header('location:ver_curso.php');
?>