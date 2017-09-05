<?php
include_once "cabecalho.php";

include_once 'Salvar.php';
//
$oImagem = new Imagem();
if (!empty($_GET['foto'])) {
    $oImagem->carregarPorId($_GET['foto']);
}

?>
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>!!!</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design
                            <small>different form elements</small>
                        </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br/>
                        <form id="demo-form2" name="foto" action="processamento.php?acao=imagem" data-parsley-validate enctype="multipart/form-data" method="post" class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Imagem <span
                                            class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                    <input id="foto" name="foto[]" multiple="multiple" class=" form-upload col-md-7 col-xs-12"
                                           required="required" type="file">
                                </div>
                            </div>

                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'rodape.php' ?>



    <!--1-quando selecionar a marca chamar o ajax-->
<!--$('$id_marca).change(function){-->
<!--    $('#id_modelo').loead('processamento?acao=recuperar-modelos&id_marca=' + $('#id_marca').val());-->
<!--});-->
<!--2- requisiçao url-->
<!--    exl:s.ajax({-->
<!--url:'pagina.php'(){-->
<!--}});-->
<!--exl: s('#div_retorno').load('pagina.php');-->
<!--3- processamento da requisiçao-->
<!--4- retorno da requisição-->
<!---->
<!--echo sql die-->
<!--function ()(-->
<!--$('#id_modelo').triger("chosen:updated");-->
<!--)-->
