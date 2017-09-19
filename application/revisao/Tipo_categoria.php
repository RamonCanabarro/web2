<?php

include_once '../conexao.php';

class Tipo_categoria{


	public function recuperarTodos(){

		$sql = "
select tipo_categoria.id_tipo_categoria, categoria.nome as categoria, tipo.nome as tipo from tipo_categoria
left join categoria
	on tipo_categoria.id_categoria = categoria.id_categoria
left join tipo
	on tipo_categoria.id_tipo = tipo.id_tipo";

		$oConexao = new Conexao();
		return $oConexao->recuperarTodos($sql);
	}

}

if(isset($_POST["id_tipo"])){
    if($_POST["id_tipo"]!=""){

        $sql = "select id_categoria from tipo_categoria where id_tipo = '".$_POST["id_tipo"]."''";

        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }else{
        $sql ="select * from tipo_categoria";
        $oConexao = new Conexao();
        return $oConexao->recuperarTodos($sql);
    }
}
