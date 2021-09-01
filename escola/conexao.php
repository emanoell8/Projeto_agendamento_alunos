<?php
    $serivdor = "localhost";
    $usuario = "root";
    $senha = "usbw";
    $banco = "matriculas";

    $conexao = mysqli_connect($serivdor, $usuario, $senha, $banco);

    $query = "SELECT * FROM aluno";
    $consulta_aluno = mysqli_query($conexao, $query);

    $query1 = "SELECT * FROM curso";
    $consulta_curso = mysqli_query($conexao, $query1);

    $query2 = "SELECT aluno.nome_aluno,aluno.codigo, curso.nome, matricula.cod_matricula, curso.cod_curso FROM aluno, curso, matricula WHERE matricula.codigo = aluno.codigo AND matricula.cod_curso =  curso.cod_curso";
    $consulta_matricula = mysqli_query($conexao, $query2);
?>