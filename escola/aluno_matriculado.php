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
.container-fluid{
    width: 95%;
}
    @media screen and (min-width:500px) {
    .container-fluid{
        width: 60% !important;
    }
}
.fundo{
    height: 150px;
    width: 100%;
    border-radius: 6px;
    margin-top:20px;
}
.foto_user{
    border: 6px solid var(--background);
    margin-top: -67px;
}
.form-control:disabled, .form-control[readonly]{
    background-color: var(--simple-active);
    border:none;
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
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <?php
            include_once 'conexao.php';
            while($matricula = mysqli_fetch_array($consulta_matricula)){
            while($aluno = mysqli_fetch_array($consulta_aluno)){
                if($matricula['codigo'] and $aluno['codigo'] == $_GET['id']){
            ?>
            <div class="fundo"></div>
            <div class="text-center">
                <img data-ripplet src="user.png" class="foto_user text-dark" alt="">
                <h4><?php echo $aluno['nome_aluno'];?></h4>
            </div>
            <div class="integrantes">
                <fieldset disabled="disabled">
                <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" value="<?php echo $aluno['nome_aluno'];?>" class="form-control">
                </div>
                <div class="form-group">
                <label>Idade</label>
                <input type="text" name="nome" value="<?php echo $aluno['idade'];?>" class="form-control">
                </div>
                <div class="form-group">
                <label>RA</label>
                <input type="text" name="nome" value="<?php echo $aluno['ra'];?>" class="form-control">
                </div>
                </fieldset>
                <form action="delete_matricula.php" method="post">
                <input type="hidden" name="id" value="<?php echo $matricula['cod_matricula'];?>" class="form-control">
                <button data-ripplet type="submit" class="delete">Excluir matricula</button>
                </form>
            </div>
            <?php
                }
            }
        }
            ?>
            <button data-ripplet class="btn-simple" style="margin-bottom:20px;" onclick="window.location.href = 'javascript:history.back()'">Voltar</button>             
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ripplet.js/umd/ripplet-declarative.min.js"></script>
</body>
</html>