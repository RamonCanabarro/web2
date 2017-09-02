<?php include_once 'list.php';
$oCadastro = new Cadastrar4();
if (!empty($_GET['id_cardapio'])) {
    $oCadastro->carregarPorId($_GET['id_cardapio']);
}

include_once '../cabecalho.php';
?>
<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="id_cardapio">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center">
            <h4>Cadastro</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_cardapio" id="id_cardapio"
                       value="<?php echo $oCadastro->getIdCardapio(); ?>"/></div>

            <div class="col-md-6">
                <label for="pratos">Nome</label>
                <input type="text" placeholder="Nome" id="pratos" name="pratos" required
                       class="form-control text-uppercase"
                       value="<?php echo $oCadastro->getPratos(); ?>"/>
            </div>

            <div class="col-md-6">
                <label for="preco">Preco</label>
                <input type="text" placeholder="Preco" id="preco" name="preco" required
                       class="form-control text-uppercase"
                       value="<?php echo $oCadastro->getPreco(); ?>"/>
            </div>
            <div class="panel-footer" align="center">
                <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
            </div>
            <?php include_once '../rodape.php';?>
        </div>
    </div>
</form>