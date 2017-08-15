<?php

include_once '../conexao.php';

class Cadastro{
	
	protected $id_cadastro;
	protected $nome;
	
	public function getIdCadastro(){
		return $this->id_cadastro;
	}
	
	public function setIdCadastro($id_cadastro){
		$this->id_cadastro = $id_cadastro;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function inserir($dados){
		
		$nome = $dados['nome'];
		
		$sql = "insert into cadastro (nome) 
						   values ('$nome')";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function alterar($dados){
		
		$id_curso = $dados['id_curso'];
		$nome     = $dados['nome'];
	
		$sql = "update cadastro set
					nome = '$nome'
				where id_cadastro = $id_cadastro";
		
		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}

	public function excluir($id_cadastro){
	
		$sql = "delete from cadastro where id_cadastro = $id_curso";

		$oConexao = new Conexao();
		return $oConexao->executar($sql);
	}
	
	public function recuperarTodos(){
		
		$sql = "select * from cadastro";
		
		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

	public function carregarPorId($id_curso){
	
		$sql = "select * from cadastro where id_cadastro = $id_cadastro";
		
		$oConexao = new Conexao();
		$cursos = $oConexao->recuperarTodos($sql);
		
		$this->id_cadastro = $cadastro[0]['id_cadastro'];
		$this->nome = $cadastro[0]['nome'];
	}
}