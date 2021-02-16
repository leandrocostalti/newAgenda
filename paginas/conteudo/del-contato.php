<?php

include('../../config/conexao.php');
if(isset($_GET['idDel'])){
    $id = $_GET['idDel'];
    $delete = "DELETE FROM tb_contatos WHERE id_contatos=:id";

    try{

        $result = $conect->prepare($delete);
        $result->bindValue(':id', $id, PDO::PARAM_INT);
        $result->execute();

        $contar = $result->rowCount();
        if($contar>0){
            header("Location: ../home.php");
        }else{
            header("Location: ../home.php");
        }

    }catch(PDOException $e){
        echo "<strong>ERRO DE DELETE: </strong>".$e->getMessage();
    }
}