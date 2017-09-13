<?php

include_once '../conexao.php';

class Marca{
	
	protected $id_marca;
	protected $nome;
	
	public function getIdMarca(){
		return $this->id_marca;
	}
	
	public function setIdMarca($id_marca){
		$this->id_marca = $id_marca;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function inserir($dados){
		
		$nome = $dados['nome'];
		
		$sql = "insert into marca (nome) 
						   values ('$nome')";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function alterar($dados){
		
		$id_marca = $dados['id_marca'];
		$nome     = $dados['nome'];
	
		$sql = "update marca set
					nome = '$nome'
				where id_marca = $id_marca";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

	public function excluir($id_marca){
	
		$sql = "delete from marca where id_marca = $id_marca";

		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function recuperarTodos(){
		
		$sql = "select * from marca";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_marca){
	
		$sql = "select * from marca where id_marca = $id_marca";
		
		$oConexao = new Conexao();
		$marcas = $oConexao->recuperarTodos($sql);
		
		$this->id_marca = $marcas[0]['id_marca'];
		$this->nome = $marcas[0]['nome'];
	}
}