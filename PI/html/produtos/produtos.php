<?php
include_once 'list.php';
$oCadastro = new Cadastrar4();
if (!empty($_GET['id_produtos'])) {
    $oCadastro->carregarPorId($_GET['id_produtos']);
}

include_once '../administrador/list.php';

$oAdministrador = (new Cadastrar())->recuperarTodos();
include_once '../cabecalho.php';
?>
<form class="col-md-12" action="processamento.php?acao=salvar" method="post" name="id_produtos">
    <div class="panel panel-primary">
        <div class="panel panel-heading"></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_produtos" id="id_produtos"
                       value="<?php echo $oCadastro->getIdProdutos(); ?>"/></div>
            <div class="col-md-6">
                <label for="codigo">Código:</label>
                <input type="number" id="codigo" name="codigo" placeholder=""
                       required class="form-control" value="<?php echo $oCadastro->getCodigo(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="nome" class="control-label col-md-2">Nome:</label>
                <input type="text" placeholder="" id="nome" name="nome" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getNome(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="preco" class="control-label col-md-2">Preço:</label>
                <input type="text" placeholder="" id="preco" name="preco" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getPreco(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="qtd" class="control-label col-md-2">Quantidade:</label>
                <input type="number" placeholder="" id="qtd" name="qtd" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getQtd(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="observacoes" class="control-label col-md-2">Observações:</label>
                <input type="text" placeholder="" id="observacoes" name="observacoes" required
                       class="form-control text-lowercase"
                       value="<?php echo $oCadastro->getObservacao(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="administrador" class="control-label col-md-2">Administrador:</label>
                <select data-placeholder="Empregado..." name="administrador" id="administrador" class="col-md-6 chosen-select ">
                    <?php foreach ($oAdministrador as $administrador) { ?>
                        <option value="<?php echo $administrador["id_administrador"]; ?>"><?php echo $administrador['nome']?></option>;
                    <?PHP } ?>
                </select>
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
        <?php include '../rodape.php'; ?>
    </div>

</form>