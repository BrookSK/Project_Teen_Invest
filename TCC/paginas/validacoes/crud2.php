<?php
    /*1-definindo a conexao -local, usuario, senha e banco de dados*/
    include("../bd/conexao.php");
    
    /*2-definindo o comando sql a ser usado */
    $comandoSql="select * from tb_usuario";

    /*4-pegando os dados armazenados e exibindo*/
    $result= mysqli_query($con, $comandoSql);

    $cpf= $dados["cpf_usuario"];
    $n= $dados["nascimento_usuario"];
    $t= $dados["telefone_usuario"];
?>