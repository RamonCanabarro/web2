<?php
class Conexao {
	
	protected $conexao;
	
	public function conectar()
	{
		$this->conexao = new PDO('mysql:host=localhost;dbname=projeto_produto', 'root', '');
	}
	
	public function desconectar()
	{
		unset($this->conexao);
	}
	
	public function executar($sql)
	{
		$this->conectar();
		$resultado = $this->conexao->exec($sql);
		$this->desconectar();
		
		return $resultado;
	}	
	
	public function recuperarTodos($sql)
	{
		$this->conectar();
		$resultado = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		$this->desconectar();
		
		return $resultado;
	}	
	
}