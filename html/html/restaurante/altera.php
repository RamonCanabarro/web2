<?php
include_once "list2.php"
?>


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Bar & Restaurante</title>

    <style>
        body {
            background-image: url("restaurante.jpg");
            /*background-repeat: no-repeat;*/
        }

        h1 {
            font-family: "tahoma", serif;
            font-style: italic;
            background-color: black;
            text-decoration: underline;

        }

    </style>
</head>
<body>
<link type="text/css" rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
<nav class="navbar navbar-default">
    <div style="background: #000000">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index/index.php">Voltar</a>
            </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>

<form action="processamento.php?acao=salvar" method="post" name="cadastro" class=" col-md-12">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center" style="background-color:#ff3300">
            <h4>Cadastrar Bar/Restaurante</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <div class="col-md-6">
                    <label for="nome_restaurante">Novo nome:</label>
                    <input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
                    <?php
                    $oRestaurante = new Cadastro();
                    $oRestaurante->carregarPorId($_GET["id"]);
                    ?>
                    <input type=" text" id="nome_restaurante" value="<?php echo $oRestaurante->getNome_restaurante() ?>" name="nome_restaurante" placeholder="Nome do restaurante"
                    required class="form-control"/>
                </div>

                <div class="panel-footer" align="center">
                    <button type="submit" value="Enviar" class="btn btn-danger" href="">Salvar</button>
                    <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
                </div>


</body>
</html>

