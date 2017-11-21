<?php

include_once '../../conexao.php';

class Produtos
{

    protected $id_produtos;
    protected $preco;
    protected $qtd;
    protected $observacoes;
    protected $administrador;
    protected $nome;
    protected $codigo;

    public function getIdProdutos()
    {
        return $this->id_produtos;
    }

    public function setIdProdutos($id_produtos)
    {
        $this->id_produtos = $id_produtos;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getQtd()
    {
        return $this->qtd;
    }

    public function setQtd($qtd)
    {
        $this->qtd = $qtd;
    }

    public function getObservacao()
    {
        return $this->observacoes;
    }

    public function setObservacao($observacoes)
    {
        $this->observacoes = $observacoes;
    }

    public function getAdministrador()
    {
        return $this->administrador;
    }

    public function setAdministrador($administrador)
    {
        $this->administrador = $administrador;
    }

    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados, $img)
    {
        $id_produtos = $dados['id_produtos'];
        $nome = $dados['nome'];
        $preco = $dados['preco'];
        $codigo = $dados['codigo'];
        $qtd = $dados['qtd'];
        $observacoes = $dados['observacoes'];
        $imagem = $img;
        $administrador = $dados['administrador'];

        $sql = /** @lang text */
            "insert into produtos (nome, preco, quantidade, observacoes, administrador_id_administrador, codigo, imagem)values ('$nome', '$preco','$qtd', '$observacoes','$administrador', '$codigo','$imagem')";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_produtos)
    {

        $sql = "select * from produtos where id_produtos = $id_produtos";

        $oConexao = new conexao();
        $produtos = $oConexao->recuperarTodos($sql);

        $this->nome = $produtos[0]['nome'];
        $this->preco = $produtos[0]['preco'];
        $this->quantidade = $produtos[0]['quantidade'];
        $this->observacoes = $produtos[0]['observacoes'];
        $this->administrador_id_administrador = $produtos[0]['administrador_id_administrador'];
        $this->codigo = $produtos[0]['codigo'];

    }
    public function fazerUpload($id_produto)
    {
        foreach ($_FILES["foto"]["error"] as $chave => $error) {
            if (!$_FILES['foto']['error'][$chave]){

                $nomeArquivo = date('Ymd') . '_' . $id_produto . '_' . $_FILES['foto']['name'][$chave];

                $origem = $_FILES['foto']['tmp_name'][$chave];
                $destino = '../upload/produtos/' . $nomeArquivo;

                move_uploaded_file($origem, $destino);

                $sql = "insert into foto (id_produto, caminho)
                               values('$id_produto', '$nomeArquivo')";

                $oConexao = new Conexao();
                $oConexao->executar($sql);

            }
        }
    }

    public function recuperarTodos()
    {

        $sql = "select * from produtos inner join administrador on administrador.id_administrador = produtos.administrador_id_administrador";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function verificarCodigo($codigo)
    {
        $sql = "select count(*) as qtd
                from produtos
                where codigo = '$codigo'";

        $oConexao = new Conexao ();
        $retorno = $oConexao->recuperarTodos($sql);

        if($retorno[0]['qtd']){
            echo 'Já existe produto com o código informado';
        } else {
            echo 'O código está disponível';
        }
    }

    public function excluir($id_produtos)
    {

        $sql = "delete from produtos where id_produtos = $id_produtos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }


}


