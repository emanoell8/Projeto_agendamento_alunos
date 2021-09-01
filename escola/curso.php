<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
.container-fluid{
    width: 95%;
}
.col-md-12{
    left: 0%;
    top: 50%;
    transform: translate(0%, 5%);
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="text-left">
            <?php
            include_once 'conexao.php';
            while($curso = mysqli_fetch_array($consulta_curso)){
                $curso_nome = $curso['nome'];
                $curso_area = $curso['area'];
                if($curso['cod_curso'] == $_GET['id']){
            ?>
                        <h1><?php echo $curso_nome;?></h1>
                        <span class="badge bg-primary" style="background-color: var(--default-colo-site) !important;"><?php echo $curso_area;?></span>
                        <br>
                        <br>
                        <h5>Todos que estão matriculados neste curso.</h5>
                    </div>
                    <div class="integrantes">
                    <?php
                        while($matricula = mysqli_fetch_array($consulta_matricula)){
                            if ($curso['cod_curso'] and $matricula['cod_curso'] == $_GET['id']) {
                    ?>
                        <p class="nomo_aluno" onclick="window.location.href = 'aluno_matriculado.php?id=<?php echo $matricula['codigo'];?>'"><?php echo $matricula['nome_aluno'];?></p>
                        <div class="tracado"></div>
                        <?php
                        }
                        }
                        }
                        }
                        ?>
                    </div>
                    <button data-ripplet class="btn-simple" style="margin-bottom:20px;" onclick="window.location.href = 'ver_curso.php'">Voltar</button>           
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ripplet.js/umd/ripplet-declarative.min.js"></script>
</body>
</html>