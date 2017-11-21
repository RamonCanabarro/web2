
<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../../../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="../../../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

    <link href="../../../vendors/cropper/dist/cropper.min.css" rel="stylesheet">
    <!-- Chosen -->
<!--    <link href="../../../vendors/chosen/chosen.css" rel="stylesheet">-->
    <!-- Font Awesome -->
    <link href="../../../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../../../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../../../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">

                    <?php if(!empty($_SESSION['mensagem'])){ ?>
                        <div class="alert alert-danger">
                            <?php
                            echo $_SESSION['mensagem'];
                            unset ($_SESSION['mensagem']);
                            ?>
                        </div>
                    <?php } ?>

                    <form action="logar.php" method="post">
                        <h1>Login Form</h1>
                        <div>
                            <input name="email" type="text" class="form-control" placeholder="E-mail" required="" />
                        </div>
                        <div>
                            <input name="senha" type="password" class="form-control" placeholder="Senha" required="" />
                        </div>
                        <div>
                            <input class="btn btn-success" type="submit"  value="Entrar">
                        </div>

                        <div class="clearfix"></div>
                        <div class="separator">Ainda não se cadastrou?
                                <a href="administrador.php" class="btn-link">Cadastrar</a>
                        </div>
                    </form>
                </section>
            </div>

        </div>

    </div>
</div>

<!-- jQuery -->
<script src="../../../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Bootstrap Colorpicker -->
<link href="../../../vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

<link href="../../../vendors/cropper/dist/cropper.min.css" rel="stylesheet">

<script src="../../../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- Chosen -->
<!--<script src="../../../vendors/chosen/chosen.jquery.min.js"></script>-->
<!-- FastClick -->
<script src="../../../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../../../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../../../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../../../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../../../vendors/Flot/jquery.flot.js"></script>
<script src="../../../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../../../vendors/Flot/jquery.flot.time.js"></script>
<script src="../../../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../../../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../../../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../../../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../../../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../../../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../../../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../../vendors/moment/min/moment.min.js"></script>
<script src="../../../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../../../build/js/custom.min.js"></script>

</body>
</html>