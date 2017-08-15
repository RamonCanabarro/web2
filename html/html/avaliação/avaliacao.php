
<?php
include_once 'list5.php';
$oCadastro = new Cadastrar5();
if(!empty($_GET['produtos'])){
    $oCadastro->carregarPorId($_GET['produtos']);
} ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Bar & Restaurante</title>

    <style>
        body {
            background-image: url("restaurante.jpg");
        }

        h1 {
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

<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="produtos">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center" style="background-color:#ff3300">
            <h4>Reservas</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="form-group col-md-8">
                <label for="name">Nome/Marca:</label>
                <input type="text" id="nome" name="nome" class="form-control" required
                       value="<?php echo $oCadastro->getNome(); ?>">
                <label for="preco">Preco:</label>
                <input type="text" id="preco" name="preco" class="form-control"
                       value="<?php echo $oCadastro->getPreco(); ?>">
                <label for="quantidade">Quantidade:</label>
                <input type="text" id="quantidade" name="quantidade" class="form-control"
                       value="<?php echo $oCadastro->getQuantidade(); ?>">
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-danger">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
        </div>
    </div>
</form>

</body>
</html>