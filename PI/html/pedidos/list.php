<?php
include_once '../../conexao.php';
error_reporting(E_ALL);

class Cadastrar
{
    protected $id_pedidos;
    protected $preco;
    protected $nome;
    protected $codigo;

    public function getIdPedidos()
    {
        return $this->id_pedidos;
    }

    public function setIdPedidos($id_pedidos)
    {
        $this->id_pedidos = $id_pedidos;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
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
    /**
     * @param $dados
     * @return mixed
     */
    public function inserir($dados)
    {
        $nome = $dados['nome'];
        $preco = $dados['preco'];
        $codigo = $dados['codigo'];

        $sql = /** @lang text */
            "insert into pedidos (codigo, nome, preco, ) values('$codigo','$nome', '$preco',)";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function carregarPorId($id_pedidos)
    {

        $sql = "select * from pedidos where id_pedidos = $id_pedidos";

        $oConexao = new conexao();
        $pedidos = $oConexao->recuperarTodos($sql);
        $this->nome = $pedidos['nome'];
        $this->preco = $pedidos['preco'];
        $this->codigo = $pedidos['codigo'];
       }

    public function excluir($id_pedidos)
    {

        $sql = "delete from pedidos where id_pedidos = $id_pedidos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

    public function recuperarTodos()
    {

        $sql = "select * from pedidos";

        $oConexao = new conexao();
        return $oConexao->recuperarTodos($sql);
    }

    public function alterar($dados)
    {
        $id_pedidos = $dados['id_pedidos'];
        $nome = $dados['nome'];
        $preco = $dados['preco'];
        $codigo = $dados['codigo'];
        $sql = "update pedidos set
					nome = '$nome', codigo = '$codigo', preco = '$preco' where id = $id_pedidos";

        $oConexao = new conexao();
        return $oConexao->executar($sql);
    }

}