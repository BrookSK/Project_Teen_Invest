<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Conta</title>
    <script language="javascript" type="text/javascript">
        function f_mostraDeu() {
            alert("Conta criada com sucesso !");
        }

        function f_mostraNaoDeu() {
            alert("Não foi possivel a criação da conta !");
        }
    </script>
</head>
<body>
    
</body>
</html>

<?php

/*pegando os dados vindos do formulario */
$pn=$_POST["PrimeiroNome"];
$un=$_POST["UltimoNome"];
$e=$_POST["email"];
$s=$_POST["senha"];
$sc=$_POST["senhac"];

/*1- definindo a conexao - local, usuario, senha e banco de dados*/
include ("../../bd/conexao.php");

/*2-definindo o comando sql a ser usado */
$comandoSql="insert into tb_usuario(primeironome_usuario, ultimonome_usuario, email_usuario,senha_usuario)values('$pn','$un','$e','$s')";

/*3-executando o comando sql */ 
$resultado = mysqli_query($con, $comandoSql);

/*4-conferindo se o registro foi inserido*/  
if($resultado==true){

    //include "teste.php";
    //var_dump($_SESSION);
    //var_dump($bd);
    //var_dump($pn, $un, $e, $cpf, $n, $t, $s);
    //var_dump($resultado);
    //exit;
    
    //echo '<script>f_mostraDeu();</script>';
    header("Location: ../menu.php");

} else{
    
    echo '<script>f_mostraNaoDeu();</script>';
    ?>
        <script>
	        window.location.href = "../CriarConta.php";
	    </script>
	<?php
}