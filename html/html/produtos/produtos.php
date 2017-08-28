<?php
include_once 'list4.php';
$oCadastro = new Cadastrar4();
if (!empty($_GET['produtos'])) {
    $oCadastro->carregarPorId($_GET['produtos']);
}
include_once '../cabecalho.php';
?>
<form class="col-md-12" action="processamento.php?acao=salvar" method="post" name="produtos">
    <div class="panel panel-primary">
        <div class="panel panel-heading"></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_produtos" id="id_produtos"
                       value="<?php echo $oCadastro->getIdProdutos(); ?>"/></div>
            <div class="col-md-6">
                <label for="nome" class="control-label col-md-2">Nome:</label>
                <input type="text" placeholder="E-mail" id="nome" name="nome" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getNome(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="preco" class="control-label col-md-2">Preço:</label>
                <input type="text" placeholder="E-mail" id="preco" name="preco" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getPreco(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="qtd" class="control-label col-md-2">Quantidade:</label>
                <input type="number" placeholder="E-mail" id="qtd" name="qtd" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getQtd(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="observacoes" class="control-label col-md-2">Observações:</label>
                <input type="text" placeholder="E-mail" id="observacoes" name="observacoes" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getObservacao(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="administrador" class="control-label col-md-2">Administrador:</label>
                <input type="text" placeholder="E-mail" id="administrador" name="administrador" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getAdministrador(); ?>"/>
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include '../rodape.php'; ?>
    </div>

</form>