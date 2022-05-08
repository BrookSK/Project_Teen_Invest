<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de Conta</title>
    <script language="javascript" type="text/javascript">
        function f_mostraDeu() {
            alert("Curso inserido com sucesso !");
        }

        function f_mostraNaoDeu() {
            alert("Não foi possivel a inserção do curso !");
        }
    </script>
</head>
<body>
    
</body>
</html>

<?php

/*pegando os dados vindos do formulario */
$nome=$_POST["nomeCurso"];
$descricao=$_POST["descricao"];
$preco=$_POST["preco"];
$link=$_POST["link"];

/*1- definindo a conexao - local, usuario, senha e banco de dados*/
include ("../../bd/conexao.php");

/*2-definindo o comando sql a ser usado */
$comandoSql1="insert into tb_cursos(nome_cursos, descricao_cursos, preco_cursos, link_cursos)values('$nome','$descricao','$preco','$link')";

/*3-executando o comando sql */ 
/*4-conferindo se o registro foi inserido*/  
 if( mysqli_query($con, $comandoSql1) != true ){

    echo '<script>f_mostraNaoDeu();</script>';
    ?>
        <script>
	        window.location.href = "../Cursos.php";
	    </script>
	<?php
 }

header("Location: ../menu.php");