<?php 
include_once 'Produto.php';
include_once '../conexao.php';
    
$oProduto = new Produto();
$aProdutos = $oProduto->recuperarTodos($_GET);

include_once '../cabecalho_produtos.php';?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               
              </div>

              <div class="title_right">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Pesquisar!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">

                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                      </div>

                      <div class="clearfix"></div>
                    <?php foreach($aProdutos as $produto){?>
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $produto['nome']?></i></h4>
                            <div class="left col-xs-7">
                            <h3>Modelo</h3>
                            <p>Marca</p>
                              <p><strong></strong><?php echo $produto['modelo']?> </p>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-building"></i><?php echo $produto['preco']?></li>
                                <li><a href="produtos.php?id_tipo=<?php echo $tipo['id_tipo']?>"></a> Phone #: </li>
                              </ul>
                            </div>
                        <?php }?>
                     
                           

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include_once '../rodape.php'; ?>