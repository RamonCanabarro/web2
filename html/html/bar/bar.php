<?php
include_once 'list2.php';
$oCadastro = new Cadastro();
if (!empty($_GET['nome_restaurante'])) {
    $oCadastro->carregarPorId($_GET['nome_restaurante']);
}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <title>Bar & Restaurante</title>

    <style>
        body {
            background-image: url("restaurante.jpg");
            /*background-repeat: no-repeat;*/
        }

        h1 {
            font-family: "tahoma", serif;
            font-style: italic;
            background-color: black;
            text-decoration: underline;

        }

    </style>
</head>
<body>
<link type="text/css" rel="stylesheet" href="../js/bootstrap/css/bootstrap.css"/>
<nav class="navbar navbar-default">
    <div style="background: #000000">
        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index/index.php">Voltar</a>
            </div>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

</nav>

<form action="processamento2.php?acao=salvar" method="post" name="cadastro" class=" col-md-12">
    <div class="panel panel-primary" aling="center">
        <div class="panel-heading" align="center" style="background-color:#ff3300">
            <h4>Cadastrar Bar/Restaurante</h4>
        </div>
        <div class="panel-body form-horizontal">
            <div class="col-md-12">

                <div class="col-md-6">
                    <label for="nome_restaurante">Nome:</label>
                    <input type="text" id="nome_restaurante" name="nome_restaurante" placeholder="Nome do restaurante"
                           required class="form-control" value="<?php echo $oCadastro->getNome_restaurante(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="cep">CEP:</label>
                    <input name="cep" type="text" id="cep" placeholder="00000-000" size="10" maxlength="9"
                           class="form-control" value="<?php echo $oCadastro->getCep(); ?>"
                           onblur="pesquisacep(this.value);"/>
                </div>
                <div class="col-md-6">
                    <label for="endereco">Endereço:</label>
                    <input type="text" placeholder="Endereço" id="endereco" name="endereco" required
                           class="form-control" value="<?php echo $oCadastro->getEndereco(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="numero">Numero:</label>
                    <input type="text" placeholder="numero" id="numero" name="numero" required class="form-control"
                           value="<?php echo $oCadastro->getNumero(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="bairro">Bairro:</label>
                    <input type="text" placeholder="bairro" id="bairro" name="bairro" required class="form-control"
                           value="<?php echo $oCadastro->getBairro(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="cidade">Cidade:</label>
                    <input type="text" placeholder="cidade" id="cidade" name="cidade" required class="form-control"
                           value="<?php echo $oCadastro->getCidade(); ?>"/>
                </div>
                <div class="col-md-6">
                    <label for="uf">UF:</label>
                    <input type="text" placeholder="uf" id="uf" name="uf" required class="form-control"
                           value="<?php echo $oCadastro->getUf(); ?>"/>
                </div>
            </div>
        </div>
        <div class="panel-footer" align="center">
            <button type="submit" value="Enviar" class="btn btn-danger" href="">Salvar</button>
            <button type="reset" value="Cancelar" class="btn btn-danger">Cancelar</button>
        </div>


</body>
</html>


<script type="text/javascript">

    function limpa_formulário_cep() {
        //Limpa valores do formulário de cep.
        document.getElementById('endereco').value = ("");
        document.getElementById('bairro').value = ("");
        document.getElementById('cidade').value = ("");
        document.getElementById('uf').value = ("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value = (conteudo.logradouro);
            document.getElementById('bairro').value = (conteudo.bairro);
            document.getElementById('cidade').value = (conteudo.localidade);
            document.getElementById('uf').value = (conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }

    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor;
//                .replace(/\D/g, '');
        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value = "...";
                document.getElementById('bairro').value = "...";
                document.getElementById('cidade').value = "...";
                document.getElementById('uf').value = "...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = '//viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';
                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

</script>