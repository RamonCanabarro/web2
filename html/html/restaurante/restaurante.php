<?php
include_once 'list3.php';
$oCadastro = new Cadastrar3();
if(!empty($_GET['reservas'])){
    $oCadastro->carregarPorId($_GET['reservas']);
}
?>

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
            Text-decoration: underline;

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
     <form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="reservas">
        <div class="panel panel-primary" >
            <div class="panel-heading" align="center" style="background-color:#ff3300">
                <h4>Reservas</h4>
            </div><div class="panel-body form-horizontal">
            <div class="form-group col-md-8">
                <label for="horario">Data:</label>
                <input type="date" id="horario" name="horario" class="form-control" required value="<?php echo $oCadastro->getHorario(); ?>">
                <label for="cliente">Cliente:</label>
                <input type="text" id="cliente" name="cliente" class="form-control" value="<?php echo $oCadastro->getCliente(); ?>">
                   <label for="cpf">CPF:</label>
                <input type="number" id="cpf" name="cpf" class="form-control" value="<?php echo $oCadastro->getCpf(); ?>">

                <label for="Qtd_Adult">Quant. Adultos:</label>
                <input type="number" id="Qtd_Adult" name="Qtd_Adult" class="form-control" value="<?php echo $oCadastro->getQtd_Adult(); ?>">
                <label for="Qtd_Crian">Quant. Crianças:</label>
                <input type="number" id="Qtd_Crian" name="Qtd_Crian" class="form-control" value="<?php echo $oCadastro->getQtd_Crian(); ?>">

            </div> </div>
         
        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-danger">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
        </div>
         </div></form>

</body>
</html>