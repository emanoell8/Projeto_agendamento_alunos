<?php
include_once 'conexao.php';

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $ra = $_POST['ra'];
    $sexo = $_POST['sexo'];

    $query = "INSERT INTO aluno(nome_aluno, sexo, idade, ra) 
              values('$nome', '$sexo', $idade, $ra)";

    mysqli_query($conexao, $query);
    header('location:ver_aluno.php');
?>