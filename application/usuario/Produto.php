<?php
  class Produto
  {
      public function Produto($id_categoria)
      {
          $sql = "select * from tipo t 
                unner join tipo_categoria tc on tc.id_tipo =t.id_tipo
                wwhere tc.id_categoria = '$id_categoria'
                order by t.nome";
          return $conexao->recuperarTodos($sql);
      }
  }
?>