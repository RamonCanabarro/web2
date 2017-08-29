<?php
include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['id'])) {
    $oCadastro->carregarPorId($_GET['id']);
}

include_once '../cabecalho.php';
?>

<form action="processamento.php?acao=salvar" method="post" name="id">
    <div class="panel panel-primary">
        <div class="panel-heading" align="center"></div>
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
                <label for="administrador">Nome:</label>
                <input type="text" id="administrador" name="administrador" placeholder="Administrador"
                       required class="form-control" value="<?php echo $oCadastro->getAdministrador(); ?>"/>
            </div>

        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-success" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
        </div>
<?php include_once '../rodape.php';?>
    </div>
</form>
