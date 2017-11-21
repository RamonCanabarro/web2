<?php
include_once '../restaurante/list.php';
$oCadastro = new Cadastrar0();
$cadastrar = $oCadastro->recuperarTodos();
include_once '../produtos/list.php';
$oProdutos = (new Produtos())->recuperarTodos();
include_once '../cabecalho.php'; ?>
    <h1 style="color:black" align="center">Tela Inicial</h1>
    <table class="table table-bordered table-striped table-hover" style="background-color:beige ">
        <?php foreach ($cadastrar as $cadastros) { ?>
            <tr >
                <h3 align="center"><?php echo $cadastros['nome_restaurante']; ?></h3>
            </tr>
        <?php } ?>
    </table>
    <div class="panel panel-primary">
        <div class="panel panel-heading" align="center"><h1>Tela Inicial</h1></div>
        <table class="table table-bordered table-striped table-hover" style="background-color:beige ">
            <?php foreach ($oProdutos as $produto) { ?>
                <div class="col-md-6 col-sm-6 col-xs-12 profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <h4 class="brief"><i><a href="#"</i>
                            </h4>
                            <div class="left col-xs-7">
                                <h2>Prato</h2>
                                <ul class="list-unstyled">
                                    <li><i class=""></i><?php echo $produto['nome']; ?></li>
                                    <li><i class="glyphicon glyphicon-usd"></i><?php echo $produto['preco']; ?></li>
                                    <li><i class="glyphicon glyphicon-usd"></i><?php echo $produto['imagem']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </table>
    </div>
<?php //include_once '../rodape.php';?>