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
                <div class="row">
                    <div class="text-center">
                        <h3>Todos os cursos</h3>
                    </div>
                    <?php
                        include_once 'conexao.php';
                        while($curso = mysqli_fetch_array($consulta_curso)){
                        $nome = $curso['nome'];
                    ?>
                    <div class="col-md-4">
					<div data-ripplet class="jumbotron" onclick="window.location.href = 'curso.php?id=<?php echo $curso['cod_curso'];?>'">
						<h2>
							<?php echo mb_strimwidth("$nome", 0, 18, "...");?>
						</h2>
                        <p>Curso de <u><?php echo $curso['nome'];?></u> de <?php echo $curso['carga'];?> horas de duração.</p>
                        <br>
                        <p>Área: <?php echo $curso['area'];?></p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/ripplet.js/umd/ripplet-declarative.min.js"></script>
</body>
</html>