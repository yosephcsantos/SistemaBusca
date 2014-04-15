<?php
    require_once 'fontes/conexao.php';
    
    $id = isset($_GET['id'])?base64_decode($_GET['id']):0;
     $sql = "DELETE FROM cliente WHERE id = '$id'";
     $rs = mysql_query($sql);
     
     
     $msg="";
     if($rs){
         $msg = "Dados Excluídos com sucesso ! ";
     }else{
         $msg = mysql_error();
     }
     echo"<script>";
    //Redirecionar o usuario
    //base64_encode() -- Criptografar um valor
    
    echo "location.href='buscar.php?msg=". base64_encode($msg)."'";
    echo "</script>";
?>
