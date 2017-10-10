<?php

include_once '../conexao.php';

class Usuario{
	
	protected $id_produto;
	protected $nome;
	protected $id_marca;
	protected $id_modelo;
	protected $codigo;
	protected $preco;
	protected $cor;

	public function getIdproduto(){
		return $this->id_produto;
	}
	
	public function setIdproduto($id_produto){
		$this->id_produto = $id_produto;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}

    /**
     * @return mixed
     */
    public function getIdMarca()
    {
        return $this->id_marca;
    }

    /**
     * @param mixed $id_marca
     */
    public function setIdMarca($id_marca)
    {
        $this->id_marca = $id_marca;
    }

    /**
     * @return mixed
     */
    public function getIdModelo()
    {
        return $this->id_modelo;
    }

    /**
     * @param mixed $id_modelo
     */
    public function setIdModelo($id_modelo)
    {
        $this->id_modelo = $id_modelo;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

	public function inserir($dados){
		
		$nome = $dados['nome'];
		
		$sql = "insert into produto (nome) 
						   values ('$nome')";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function alterar($dados){
		
		$id_produto = $dados['id_produto'];
		$nome     = $dados['nome'];
	
		$sql = "update produto set
					nome = '$nome'
				where id_produto = $id_produto";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

	public function excluir($id_produto){
	
		$sql = "delete from produto where id_produto = $id_produto";

		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function recuperarTodos(){
		
		$sql = "select * from produto order by nome";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_produto){
	
		$sql = "select * from produto where id_produto = $id_produto";
		
		$oConexao = new Conexao();
		$produtos = $oConexao->recuperarTodos($sql);
		
		$this->id_produto = $produtos[0]['id_produto'];
		$this->nome = $produtos[0]['nome'];
		$this->id_marca = $produtos[0]['id_marca'];
		$this->id_modelo = $produtos[0]['id_modelo'];
		$this->codigo = $produtos[0]['codigo'];
		$this->preco = $produtos[0]['preco'];
		$this->cor = $produtos[0]['cor'];
	}


    public function verificarCodigo($codigo)
    {
        $sql = "select count(*) as qtd
        from produto
        where codigo = '$codigo'";
        $oConexao = new Conexao();
        $retorno = $oConexao->recuperarTodos($sql);
        
        if($retorno[0]['qtd']){
            echo 'Já existe produto com o código informado';
        }else{
            echo 'O código esta disponivel';
        }
    }
}