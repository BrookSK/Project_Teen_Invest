<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Conta</title>
    <script language="javascript" type="text/javascript">
        function f_mostraDeu() {
            alert("Notícia inserida com sucesso !");
        }

        function f_mostraNaoDeu() {
            alert("Não foi possivel a inserção da notícia !");
        }
    </script>
</head>
<body>
    
</body>
</html>

<?php

/*pegando os dados vindos do formulario */
$titulo=$_POST["titulo"];
$descricao=$_POST["descricao"];
$autor=$_POST["autor"];
$link=$_POST["link"];

/*1- definindo a conexao - local, usuario, senha e banco de dados*/
include ("../../bd/conexao.php");

/*2-definindo o comando sql a ser usado */
$comandoSql1="insert into tb_noticias(titulo_noticias, descricao_noticias, autor_noticias, link_noticias)values('$titulo','$descricao','$autor','$link')";

/*3-executando o comando sql */ 
/*4-conferindo se o registro foi inserido*/  
 if( mysqli_query($con, $comandoSql1) != true ){

    echo '<script>f_mostraNaoDeu();</script>';
    ?>
        <script>
	        window.location.href = "../noticias.php";
	    </script>
	<?php
 }

header("Location: ../menu.php");