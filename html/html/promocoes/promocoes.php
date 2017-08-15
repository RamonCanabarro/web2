<?php
include_once 'list4.php';
$oCadastro = new Cadastrar4();
if (!empty($_GET['promocoes'])) {
    $oCadastro->carregarPorId($_GET['promocoes']);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Bar & Restaurante</title>

    <style>
        body {
            background-image: url("restaurante.jpg");
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

<form class="col-md-12" action="processamento.php?acao=salvar" method="post" name="promocoes">
    <div class="panel panel-primary">
        <div class="panel panel-heading" style="background-color:#ff3300" align="center"><h4>Promoções do dia</h4></div>
        <div class="panel-body form-horizontal">
            <div class="form-group col-md-8">
                <label for="horario">Data:</label>
                <input type="date" id="horario" name="horario" class="form-control" required
                       value="<?php echo $oCadastro->getHorario(); ?>">
                <label for="oferta">Promocoes:</label>
                <input type="text" id="oferta" name="oferta" class="form-control" required
                       value="<?php echo $oCadastro->getOferta(); ?>">

            </div>
        </div>

    </div>

    <div class="panel-footer" align="center">
        <button type="submit" value="Entrar" class="btn btn-danger">Enviar</button>
        <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
    </div>
</form>
</body>
</html>