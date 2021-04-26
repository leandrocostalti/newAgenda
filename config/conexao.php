<?php
try{

    @DEFINE('HOST','localhost');
    @DEFINE('BD','new_agenda');
    @DEFINE('USER','root');
    @DEFINE('PASS','qwe123lti');

    $conect = new PDO('mysql:host='.HOST.';dbname='.BD,USER,PASS);
    $conect -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "<strong>ERRO DE PDO = </strong>".$e->getMessage();
}
    
