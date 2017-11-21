<?php
include_once 'list.php';
$oCadastro = new Produtos();
if (!empty($_GET['id_produtos'])) {
    $oCadastro->carregarPorId($_GET['id_produtos']);
}

include_once '../administrador/list.php';

$oAdministrador = (new Cadastrar())->recuperarTodos();
include_once '../cabecalho.php';
?>
<form class="col-md-12" action="processamento.php?acao=salvar" enctype="multipart/form-data" data-parsley-validate method="post" name="id_produtos">
    <div class="panel panel-primary">
        <div class="panel panel-heading" align="center"><h1>Pratos</h1></div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">
                <input type="hidden" name="id_produtos" id="id_produtos"
                       value="<?php echo $oCadastro->getIdProdutos(); ?>"/></div>
            <div class="col-md-5 form-group">
                <label for="codigo">Código:</label>
                <input type="number" id="codigo" name="codigo" placeholder=""
                       required class=form-control value="<?php echo $oCadastro->getCodigo(); ?>"/>
            </div>
            <div class="col-md-5 form-group">
                <label for="nome" class="control-label col-md-2">Nome:</label>
                <input type="text" placeholder="" id="nome" name="nome" required
                       class=form-control text-lowercase"
                value="<?php echo $oCadastro->getNome(); ?>"/>
            </div>
            <div class="col-md-5 form-group">
                <label for="preco" class="control-label col-md-2">Preço:</label>
                <input type="text" placeholder="" id="preco" name="preco" required
                       class=form-control text-lowercase"
                value="<?php echo $oCadastro->getPreco(); ?>"/>
            </div>
            <div class="col-md-5 form-group">
                <label for="qtd" class="control-label col-md-2">Quantidade:</label>
                <input type="number" placeholder="" id="qtd" name="qtd" required
                       class=form-control text-lowercase"
                value="<?php echo $oCadastro->getQtd(); ?>"/>
            </div>
            <div class="col-md-5 form-group">
                <label for="observacoes" class="control-label col-md-2">Observações:</label>
                <input type="text" placeholder="" id="observacoes" name="observacoes" required
                       class=form-control text-lowercase"
                value="<?php echo $oCadastro->getObservacao(); ?>"/>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto <span class="required">*</span>
                </label>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <input type="file" multiple="multiple" name="foto[]" id="foto" required="required" class="form-control col-md-7 col-xs-12" >
                </div>
            </div>
            <div class="col-md-5 form-group">
                <label for="administrador" class="control-label col-md-2">Administrador:</label>
                <select data-placeholder="Empregado..." name="administrador" id="administrador"
                        class="col-md-5 form-group chosen-select ">
                    <?php foreach ($oAdministrador as $administrador) { ?>
                        <option value="<?php echo $administrador["id_administrador"]; ?>"><?php echo $administrador['adm'] ?></option>;
                    <?PHP } ?>
                </select>
            </div>
        </div>

        <div class="panel-footer" align="center">
            <button type="submit" value="Entrar" class="btn btn-success">Enviar</button>
            <a href="index.php" value="Cancelar" class="btn btn-success">Cancelar</a>
        </div>
    </div>

</form>
<?php include '../rodape.php'; ?>


<script>
    $(function(){
        $('#codigo').change(function(){
            //var codigo = $('#codigo').val();
            $.ajax({
                url: 'processamento.php?acao=verificar-codigo&codigo=' + $('#codigo').val(),
                success: function(retorno){
                    alert(retorno);
                }
            });
            /* ou
             $('#div_retorno').load('pagina.php');*/
        });
});
</script>
