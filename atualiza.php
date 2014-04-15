<?php 
require_once 'fontes/conexao.php'; 

?>
<?php
    
    $id = isset($_GET['id'])?base64_decode($_GET['id']):0;
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    
    $sql = "UPDATE cliente SET nome = '$nome', email = '$email', idade = '$idade', sexo = '$sexo' WHERE id = '$id' ";
    $rs = mysql_query($sql);
    
    $msg="";
    if($rs)
        $msg= " PROODUTO ATUALIZADO COM SUCESSO ! ";
    else
        $msg= mysql_error();
    
    //echo $msg;

    echo"<script>";
    //Redirecionar o usuario
    //base64_encode() -- Criptografar um valor
    
    echo "location.href='buscar.php?msg=". base64_encode($msg)."'";
    echo "</script>";
?>
