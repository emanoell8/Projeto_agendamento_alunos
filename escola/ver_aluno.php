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
    transform: translate(0%, 5%);
}
    @media screen and (min-width:500px) {
    .container-fluid{
        width: 60% !important;
    }
}
.delete{
    width:100%;
}
form{
    background:transparent;
    border:none;
    box-shadow:none;
    padding:0;
}
.card{
    background: transparent !important;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="text-center">
                        <h3>Todos os alunos</h3>
                    </div>
                    <?php
                        include_once 'conexao.php';
                        while($alunos = mysqli_fetch_array($consulta_aluno)){
                        $nome_aluno = $alunos['nome_aluno'];
                    ?>
                    <div class="col-md-4">
                        <div class="card" title="<?php echo $nome_aluno;?>">
                            <div class="fundo"></div>
                            <div class="card-body">
                            <div class="text-center">
                                <img data-ripplet src="user.png" class="foto_user text-dark" alt="">
                            </div>
                            <h6><?php echo mb_strimwidth("$nome_aluno", 0, 25, "...");?></h6>
                            <h6><?php echo $alunos['idade'];?> anos</h6>
                            <h6><?php echo $alunos['ra'];?></h6>
                            <h6><?php echo $alunos['sexo'];?></h6>
                            <form action="delete_aluno.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $alunos['codigo'];?>" class="form-control">
                            <button data-ripplet type="submit" class="delete">Excluir cadastro</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>           
                </div>
                <button data-ripplet class="btn-simple" style="margin-bottom:20px;" onclick="window.location.href = 'index.html'">Voltar</button>             
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ripplet.js/umd/ripplet-declarative.min.js"></script>
</body>
</html>