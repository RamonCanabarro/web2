<?php include_once "../administrador/verificarAcesso.php"?><!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gentelella Alela! | </title>

<!-- Bootstrap -->
<link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!--SweetAler-->
<link rel="stylesheet" href="../../html/sweetalert2.min.css">
<!-- Font Awesome -->
<link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
<!--button-->
<link href="../../../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
<!-- bootstrap-progressbar -->
<link href="../../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
<!-- JQVMap -->
<link href="../../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<!-- bootstrap-daterangepicker -->
<link href="../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
<link href="../../../chosen/chosen.min.css" rel="stylesheet"/>
<!-- Custom Theme Style -->
<link href="../../../build/css/custom.min.css" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Web</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../administrador/index.php">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paginas<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../reservas/index.php">Reservas</a></li>
                        <li><a href="../restaurante/index.php">Restaurante</a></li>
                        <li><a href="../empregado/index.php">Empregado</a></li>
                        <li><a href="../produtos/index.php">Produtos</a></li>
                        <li><a href="../pedidos/index.php">Pedidos</a></li>
                    </ul>
                </li>
                <li><a href="../administrador/processamento.php?acao=deslogar"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>

                <ul class="nav navbar-nav navbar-right">
                    <!--                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                    <!--                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
                </ul>
        </div>
    </div>
</nav>
</body>
</html>
<?php if(!empty($_SESSION['mensagem'])){ ?>
    <div class="alert alert-danger">
        <?php echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
        ?>
    </div>
<?php }?>