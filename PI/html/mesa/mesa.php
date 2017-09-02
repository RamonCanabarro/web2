<?php include_once 'list.php';
$oCadastro = new Cadastrar5();
if (!empty($_GET['id_mesa'])) {
    $oCadastro->carregarPorId($_GET['id_mesa']);
}


include_once '../cabecalho.php';
?>

<form class=" col-md-10" action="processamento.php?acao=salvar" method="post" name="id_mesa">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center">
            <h4>Cadastro</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_mesa" id="id_mesa"
                       value="<?php echo $oCadastro->getIdMesa(); ?>"/></div>

            <div class="col-md-6">
                <label for="mesa">Nome</label>
                <input type="number" placeholder="Nome" id="mesa" name="mesa" required
                       class="form-control text-uppercase"
                       value="<?php echo $oCadastro->getMesa(); ?>"/>
            </div>
            <div class="panel-footer" align="center">
                <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
                <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
            </div>
            <?php include_once '../rodape.php'; ?>
        </div>
    </div>
</form>