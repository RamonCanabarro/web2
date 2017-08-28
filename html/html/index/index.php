<?php
include_once '../restaurante/list2.php';
$oCadastro = new Cadastro();
$cadastrar = $oCadastro->recuperarTodos();

include_once '../produtos/list4.php';
$oCadastro4 = new Cadastrar4();
$cadastrar4 = $oCadastro4->recuperarTodos();


include_once '../restaurante/list3.php';
$oCadastro3 = new Cadastrar3();
$cadastrar3 = $oCadastro3->recuperarTodos();


include_once '../clientes/list5.php';
$oCadastro5 = new Cadastrar5();
$cadastrar5 = $oCadastro5->recuperarTodos();


?>

<html>
<head>
    <title>Bar & Restaurante</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <style>

        body {
            background-image: url("restaurante.jpg");
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
                <a class="navbar-brand" href="../restaurante/restaurante.php">Cadastrar estabelecimento</a>
                <a class="navbar-brand" href="../restaurante/restaurante.php">Reservas</a>
                <a class="navbar-brand" href="../clientes/clientes.php">Produtos</a>
                <a class="navbar-brand" href="../produtos/produtos.php">Promoções</a>
                <a class="navbar-brand" href="../cadastro/login.php">SAIR</a>
            </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>
<table class="table table-bordered table-striped table-hover" style="background-color:beige ">


    <?php foreach ($cadastrar as $cadastros) { ?>
        <tr>
            <td>
                <a href="../restaurante/altera.php?id=<?php echo $cadastros['id']; ?>"><span
                            class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros['nome_restaurante']; ?></td>
        </tr>
    <?php } ?>


</table>


<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Promoções</h1>
    <tr>
        <td>Ações</td>
        <td>Data</td>
        <td>Promoção</td>
    </tr>
    <?php foreach ($cadastrar4 as $cadastros4) { ?>
        <tr>
            <td>
                <a href="../produtos/list4.php?horario=<?php echo $cadastros4['horario']; ?>"><span
                            class="" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="../produtos/processamento.php?acao=excluir&horario=<?php echo $cadastros4['horario']; ?>"><span
                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros4['horario']; ?></td>
            <td><?php echo $cadastros4['oferta']; ?></td>


        </tr>
    <?php } ?>
</table>


<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Reservas</h1>
    <tr>
        <td>Ações</td>
        <td>Data</td>
        <td>Cliente</td>
        <td>cpf</td>
        <td>Quantidade de adultos</td>
        <td>Quantidade de crianças</td>
    </tr>
    <?php foreach ($cadastrar3 as $cadastros3) { ?>
        <tr>
            <td>
                <a href="../restaurante/list3.php?cpf=<?php echo $cadastros3['cpf']; ?>"><span
                            class="" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="../restaurante/processamento.php?acao=excluir&cpf=<?php echo $cadastros3['cpf']; ?>"><span
                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros3['horario']; ?></td>
            <td><?php echo $cadastros3['cliente']; ?></td>
            <td><?php echo $cadastros3['cpf']; ?></td>
            <td><?php echo $cadastros3['Qtd_Adult']; ?></td>
            <td><?php echo $cadastros3['Qtd_Crian']; ?></td>


        </tr>
    <?php } ?>
</table>

<table class="table table-bordered table-striped table-hover" style="background-color:beige ">
    <h1 style="color:silver" align="center">Produtos</h1>
    <tr>
        <td>Ações</td>
        <td>Produto</td>
        <td>Preço</td>
        <td>Quantidade</td>
    </tr>
    <?php foreach ($cadastrar5 as $cadastros5) { ?>
        <tr>
            <td>
                <a href="../clientes/list5.php?nome=<?php echo $cadastros5['nome']; ?>"><span
                            class="" aria-hidden="true"></span></a>
                <a class="excluir"
                   href="../clientes/processamento.php?acao=excluir&nome=<?php echo $cadastros5['nome']; ?>"><span
                            class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            <td><?php echo $cadastros5['nome']; ?></td>
            <td><?php echo $cadastros5['preco']; ?></td>
            <td><?php echo $cadastros5['quantidade']; ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>

<script>
    $(function () {

        $('.excluir').click(function () {

            if (!confirm('Deseja realmente excluir o registro?')) {
                return false;
            }

        });

    });
</script>
