<?php
    /*1-definindo a conexao -local, usuario, senha e banco de dados*/
    include("../bd/conexao.php");
    
    /*2-definindo o comando sql a ser usado */
    $comandoSql="select * from tb_cadusuario";

    /*4-pegando os dados armazenados e exibindo*/
    $result= mysqli_query($con, $comandoSql);

    /*4-pegando os dados armazenados e exibindo*/
    while($dados=mysqli_fetch_assoc($result)){
        $id=$dados["id_usuario"];
        $pn=$dados["primeironome_usuario"];
        $un=$dados["ultimonome_usuario"];
        $e=$dados["email_usuario"];
        //$cpf= $dados["cpf_usuario"];
        //$n= $dados["nascimento_usuario"];
        //$t= $dados["telefone_usuario"];
        $s= $dados["senha_usuario"];
    }
?>