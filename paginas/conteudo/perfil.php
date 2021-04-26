  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar Perfil</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php
        include('../config/conexao.php');
        
         /*$id = filter_input(INPUT_GET,'id',FILTER_DEFAULT);

       $select = "SELECT * FROM tb_contatos WHERE id_contatos=:id";
        try{
            $resultado = $conect->prepare($select);
            $resultado->bindParam(':id',$id, PDO::PARAM_INT);
            $resultado->execute();

            $contar = $resultado->rowCount();
            if($contar>0){
                while($show = $resultado->FETCH(PDO::FETCH_OBJ)){
                    $idCont = $show->id_contatos;
                    $nome = $show->nome_contatos;
                    $fone = $show->fone_contatos;
                    $email = $show->email_contatos;
                    $foto = $show->foto_contatos;
                }
            }else{
                echo '<div class="alert alert-danger">Não há dados com o id informado!</div>';
            }
        }catch(PDOException $e){
            echo "<strong>ERRO DE SELECT NO PDO: </strong>".$e->getMessage();
        }*/
      ?>
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Editar Perfil</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required value="<?php echo $nome_user; ?>">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" required value="<?php echo $email_user; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" name="senha" id="telefone" required value="<?php echo base64_decode($senha_user); ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Avatar do usuário</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="foto" id="foto">
                        <label class="custom-file-label" for="exampleInputFile">Arquivo de imagem</label>
                      </div>
                      
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="upPerfil" class="btn btn-primary">Alterar dados do usuário</button>
                </div>
              </form>
              <?php
                 if(isset($_POST['upPerfil'])){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = base64_encode($_POST['senha']);
                //Verificar se existe imagem para fazer o upload
                if(!empty($_FILES['foto']['name'])) {
                  $formatP = array("png", "jpg", "jpeg", "gif");
                  $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

                  if (in_array($extensao, $formatP)) {
                    $pasta = "../img/";
                    $temporario = $_FILES['foto']['tmp_name'];
                    $novoNome = uniqid() . ".{$extensao}";

                    if (move_uploaded_file($temporario, $pasta . $novoNome)) {

                    } else {
                      $mensagem = "Erro, não foi possivel fazer o upload do arquivo!";
                    }
                  } else {
                    echo "Formato inválido";
                  }
                }else{
                  $novoNome = $foto_user;
                }

                $update = "UPDATE tb_user SET foto_user=:foto,nome_user=:nome,email_user=:email,senha_user=:senha WHERE id_user=:id";
                try{
                  $result = $conect->prepare($update);
                  $result->bindParam(':id',$id_user,PDO::PARAM_STR);
                  $result->bindParam(':foto',$novoNome,PDO::PARAM_STR);
                  $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                  $result->bindParam(':email',$email,PDO::PARAM_STR);
                  $result->bindParam(':senha',$senha,PDO::PARAM_STR);
                  $result->execute();
                  // alerte abaixo
                  $contar = $result->rowCount();
                  if($contar>0){
                    echo '<div class="container">
                                <div class="alert alert-success alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5><i class="icon fas fa-check"></i> Ok !!!</h5>
                                  Perfil atualizados com sucesso.
                                </div>
                                </div>';
                    header("Refresh: 3, ?sair");
                   

                  }else{
                    echo '<div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <h5><i class="icon fas fa-check"></i> Erro !!!</h5>
                                  Perfil não foi atualizar.
                                </div>';
                  }
                }catch (PDOException $e){
                  echo "<strong>ERRO DE PDO= </strong>".$e->getMessage();
                }

              }
              ?>
            </div>
</div>
            
            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Dados do Usuário</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0" style="text-align: center; margin-bottom: 98px">
                <img src="../img/<?php echo $foto_user; ?>" alt="<?php echo $foto; ?>" title="<?php echo $foto; ?>" style="width: 200px; border-radius: 100%; margin-top: 30px">
                <h1><?php echo $nome_user; ?></h1>
                <strong><?php echo $email_user; ?></strong>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  