<?php
include_once 'list.php';
$oCadastro = new Cadastrar0();
if (!empty($_GET['id'])) {
    $oCadastro->carregarPorId($_GET['id']);
}
include_once '../administrador/list.php';

$oAdministrador = (new Cadastrar())->recuperarTodos();
include_once '../cabecalho.php';
?>

<form action="processamento.php?acao=salvar" method="post" name="id">
    <div class="panel-heading" align="center">
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id" id="id"
                       value="<?php echo $oCadastro->getId(); ?>"/></div>
            <div class="col-md-6">
                <label for="nome_restaurante">Nome:</label>
                <input type="text" id="nome_restaurante" name="nome_restaurante" placeholder="Nome do restaurante"
                       required class="form-control" value="<?php echo $oCadastro->getNome_restaurante(); ?>"/>
            </div>
            <div class="col-md-6">
                <label for="administrador" class="control-label col-md-2">Administrador:</label>
                <select data-placeholder="Administrador..." name="administrador" id="administrador"
                        class="col-md-6 chosen-select ">
                    <?php foreach ($oAdministrador as $administrador) { ?>
                        <option value="<?php echo $administrador["id_administrador"]; ?>"><?php echo $administrador['adm'] ?></option>;
                    <?PHP } ?>
                </select>
            </div>

        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-success" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
    </div>
    <?php include_once '../rodape.php'; ?>
</form>
