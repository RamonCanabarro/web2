<?php
include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['id_pedidos'])) {
    $oCadastro->carregarPorId($_GET['id_pedidos']);
}
include_once '../produtos/list.php';
$oProduto = new Produtos();

$aProdutos = $oProduto->recuperarTodos($_GET);

$produto = count($aProdutos) ? $aProdutos[0] : [];
?>


<?php include_once '../cabecalho.php'; ?>
<form action="processamento.php?acao=salvar" method="post" name="id_pedidos">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"></div>
        <div class="panel-body form-horizontal">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3><?php echo $oProduto->getNome()?></h3>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="x_content">
                                    <div class="row">

                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        </div>

                                        <div class="clearfix"></div>
                                        <p type="hidden" value="<?php echo $oCadastro->getIdPeditos(); ?>"></p>
                                        <p value="<?php echo $oCadastro->getCodigo(); ?>">Código:<?php echo $produto['codigo']?></p>
                                        <p value="<?php echo $oCadastro->getNome(); ?>">Prato:<?php echo $produto['nome']?></p>
                                        <p id="preco" value="<?php echo $oCadastro->getPreco(); ?>">Preço: <?php echo number_format($produto['preco'],2, ',','.');?></p>
                          </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel-footer" align="center">
                <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
            </div>
        </div>
</form>
        <!-- /page content -->
<script>
    $(function () {
        const preco = document.getElementById('preco')
        const quant = document.getElementById('quant')
        const result = document.getElementById('result')

        preco.oninput = (event) => {
            result.value = event.target.value * quant.value
        };

        quant.oninput = (event) => {
            result.value = event.target.value * preco.value
        };
    });
</script>