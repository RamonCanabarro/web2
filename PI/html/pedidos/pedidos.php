<?php include_once 'list.php';
$oCadastro = new Pedidos();
if (!empty($_GET['id_pedidos'])) {
    $oCadastro->carregarPorId($_GET['id_pedidos']);
}
include_once '../produtos/list.php';
$oProdutos = (new Produtos())->recuperarTodos();
include_once '../cabecalho.php'; ?>
<form action="processamento.php?acao=salvar" method="post" name="id_pedidos">
        <div class="panel-heading" align="center"></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_pedidos" id="id_pedidos"
                       value="<?php echo $oCadastro->getIdPedidos(); ?>"/></div>
            <table class="table table-bordered table-striped table-hover" style="background-color:beige ">
                <h1 style="color:silver" align="center">Listagem</h1>
                <?php foreach ($oProdutos as $produto) { ?>
                <div class="col-md-6 col-sm-6 col-xs-12 profile_details">
                    <div class="well profile_view">
                        <div class="col-sm-12">
                            <h4 class="brief"><i><a href="detalhe.php?id_produto=<?php echo $produto['nome']; ?>"</i>
                            </h4>
                            <div class="left col-xs-7">
                                <h2>Prato</h2>
                                <ul class="list-unstyled">
                                    <li><i class=""></i><?php echo $produto['imagem']; ?></li>
                                    <li><i class=""></i><?php echo $produto['nome']; ?></li>
                                    <li><i class="glyphicon glyphicon-usd"></i><?php echo $produto['preco']; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </table>
            <?php } ?>
            <?php include_once '../rodape.php'; ?>
        </div>
</form>
<!--value="--><?php //echo $produto['preco']; ?><!--"-->
<script>
    $(function () {
        const preco = document.getElementById('preco');
        const quant = document.getElementById('quant');
        const result = document.getElementById('result');

        preco.oninput = (event) =
        >
        {
            result.value = event.target.value * quant.value
        }

        quant.oninput = (event) =
        >
        {
            result.value = event.target.value * preco.value
        }
    });
</script>