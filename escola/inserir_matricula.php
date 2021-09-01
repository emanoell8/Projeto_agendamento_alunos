<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
.container-fluid{
    width: 95%;
}
.btn-default{
    width: 100%;
}
.col-md-12{
    left: 0%;
    top: 50%;
    transform: translate(0%, 22%);
}
    @media screen and (min-width:500px) {
    .container-fluid{
        width: 60% !important;
    }
}
    </style>
    <?php
        include_once 'conexao.php';
    ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3>Matricular Aluno</h3>
                </div>
                <form action="processa_matricula.php" method="post">
                    <div class="form-group">
                        <label>Alunos</label>
                        <select name="aluno_escolhido" class="form-control">
                            <option selected>Selecione um aluno</option>
                            <?php
                                while($alunos = mysqli_fetch_array($consulta_aluno)){
                            ?>
                            <option value="<?php echo $alunos['codigo'];?>"><?php echo $alunos['nome_aluno'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cursos</label>
                        <select name="curso_escolhido" class="form-control">
                            <option selected>Selecione um curso</option>
                            <?php
                                while($curso = mysqli_fetch_array($consulta_curso)){
                            ?>
                            <option value="<?php echo $curso['cod_curso'];?>"><?php echo $curso['nome'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </div>
                    <button data-ripplet type="submit" class="btn-default">Matricular</button>
                </form>
                <br>
                <button data-ripplet class="btn-simple" style="margin-bottom:20px;" onclick="window.location.href = 'index.html'">Voltar</button>             
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ripplet.js/umd/ripplet-declarative.min.js"></script>
</body>
</html>