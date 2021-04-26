  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <setion class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">

          
        </div>
      </div><!-- /.container-fluid -->
    </setion>
    <section class="content">
      <div class="container-fluid">
        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de contatos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $select = "SELECT * FROM tb_contatos ORDER BY id_contatos DESC";
                      try{
                        $result = $conect->prepare($select);
                        $cont = 1;
                        $result->execute();

                        $contar = $result->rowCount();
                        if($contar > 0){
                          while($show = $result->FETCH(PDO::FETCH_OBJ)){

                    ?>
                                      
                    <tr>
                      <td><?php echo $cont++;?></td>
                      <td><img src="../img/<?php echo $show->foto_contatos;?>" alt="<?php echo $show->foto_contatos;?>" title="<?php echo $show->foto_contatos;?>" style="width: 50px; border-radius: 100%;"></td>
                      <td><?php echo $show->nome_contatos;?></td>
                      <td><?php echo $show->fone_contatos;?></td>
                      <td><?php echo $show->email_contatos;?></td>
                      
                      <td>
                      <div class="btn-group">
                        <a href="home.php?acao=editar&id=<?php echo $show->id_contatos;?>" class="btn btn-success" title="Editar Contato"><i class="fas fa-user-edit"></i></button>
                        <a href="conteudo/del-contato.php?idDel=<?php echo $show->id_contatos;?>" onclick="return confirm('Deseja remover o contato')" class="btn btn-danger" title="Remover Contato"><i class="fas fa-user-times"></i></a>
                      </div>
                      </td>
                    </tr>
                    <?php

                            }

                          }else{

                          }
                        }catch (PDOException $e){
                            echo '<strong>ERRO DE PDO= </strong>'.$e->getMessage();
                        }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                  </tr>
                  </tfoot>
                </table>
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  