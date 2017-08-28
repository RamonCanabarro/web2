<?php
include_once 'list.php';
$oCadastro = new Cadastrar();
if (!empty($_GET['administrador'])) {
    $oCadastro->carregarPorId($_GET['administrador']);
}


include_once '../cabecalho.php';
?>

    <form action="processamento.php?acao=salvar" method="post" name="administrador" class=" col-md-12">
        <div class="panel panel-primary" aling="center">
            <div class="panel-heading" align="center">
                <h4>Cadastro</h4>
            </div>
            <div class="panel-body form-horizontal">
                <div class="col-md-12">
                    <input type="hidden" name="id_administrador" id="id_administrador"
                           value="<?php echo $oCadastro->getIdAdministrador(); ?>"/></div>

                <div class="col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" placeholder="Nome" id="nome" name="nome" required
                           class="form-control text-uppercase"
                           value="<?php echo $oCadastro->getNome(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="senha">Senha:</label>
                    <input type="password" placeholder="Senha" id="senha" name="senha" required
                           class="form-control text-uppercase"
                           value="<?php echo $oCadastro->getSenha(); ?>"/>
                </div>

                <div class="col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(00) 0000-0000" id="telefone" name="telefone" required
                           class="form-control" size="10" maxlength="9"
                           value="<?php echo $oCadastro->getTelefone(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="email" class="control-label col-md-2">E-mail:</label>
                    <input type="email" placeholder="E-mail" id="email" name="email" required
                           class="form-control text-lowercase"
                           value="<?php echo $oCadastro->getEmail(); ?>"/>
                </div>
            </div>
            <div class="panel-footer" align="center">
                <button type="submit" value="Enviar" class="btn btn-success">Salvar</button>
                <button type="reset" value="Cancelar" class="btn btn-success">Cancelar</button>
            </div>
            <?php include_once '../rodape.php'; ?>
        </div>


        </div>

    </form>

