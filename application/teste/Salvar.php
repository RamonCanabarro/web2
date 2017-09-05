<?php

include_once '../conexao.php';

class Imagem{
	
	protected $id_foto;
	protected $caminho;

	public function getIdfoto(){
		return $this->id_foto;
	}
	
	public function setIdfoto($id_foto){
		$this->id_foto = $id_foto;
	}

	public function getCaminho(){
		return $this->caminho;
	}
	
	public function setCaminho($caminho){
		$this->caminho = $caminho;
	}


    public function recuperarTodos()
    {
        $sql = "select * from foto";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
    public function inserir($dados){

        $caminho = $dados['foto'];

        $sql = "insert into foto 
						   values ('$caminho')";

        $oConexao = new Conexao();
        return $oConexao->executar($sql);
    }
	public function carregarPorId($id_foto){
	
		$sql = "select * from foto where id_foto = $id_foto";
		
		$oConexao = new Conexao();
		$fotos = $oConexao->recuperarTodos($sql);
		
		$this->id_foto = $fotos[0]['id_foto'];
		$this->caminho = $fotos[0]['caminho'];
	}


    public function verificarCodigo($codigo)
    {
        $sql = "select count(*) as qtd
        from foto
        where codigo = '$codigo'";
        $oConexao = new Conexao();
        $retorno = $oConexao->recuperarTodos($sql);
        
        if($retorno[0]['qtd']){
            echo 'Já existe foto com o código informado';
        }else{
            echo 'O código esta disponivel';
        }
    }
}