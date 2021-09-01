<?php
    include_once 'conexao.php';

    $id_aluno = $_POST['aluno_escolhido'];
    $id_matricula = $_POST['curso_escolhido'];

    $query = "INSERT INTO matricula(codigo, cod_curso)
              values($id_aluno, $id_matricula)";
    
    mysqli_query($conexao, $query);
    header('location:ver_curso.php');
?>