<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de Dados</title>
    <script language="javascript" type="text/javascript">
        function f_mostraDeu() {
            alert("Dados alterados com sucesso !");
        }

        function f_mostraNaoDeu() {
            alert("Não foi possivel a alterção dos dados !");
        }
    </script>
</head>
<body>
    
</body>
</html>

<?php

    /*Para forçar mostrar os erros*/
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    /*pegando os dados vindos do formulario */
    $pn=$_POST["PrimeiroNome"];
    $un=$_POST["UltimoNome"];
    $n=$_POST["nascimento"];
    $cpf=$_POST["cpf"];
    $t=$_POST["telefone"];
    $e=$_POST["email"];
    $s=$_POST["senha"];

    session_start();

    /*1-definindo a conexao -local, usuario, senha e banco de dados*/
    include("../../bd/conexao.php");
    
    /*2-definindo o comando sql a ser usado */
    $comandoSql="update tb_usuario set primeironome_usuario='$pn', ultimonome_usuario='$un', cpf_usuario='$cpf', email_usuario='$e', nascimento_usuario='$n', telefone_usuario='$t', senha_usuario='$s' where id_usuario=" . $_SESSION['id'];

    /*4-pegando os dados armazenados e exibindo*/
    $result= mysqli_query($con, $comandoSql);

    /*4-conferindo se o registro foi inserido*/  
    if($result==true){

        echo '<script>f_mostraDeu();</script>';
        header("Location: ../menu.php");

        $_SESSION["pn"]=$pn;
        $_SESSION["un"]=$un;
        $_SESSION["e"]=$n;
        $_SESSION["cpf"]=$cpf;
        $_SESSION["n"]=$n;
        $_SESSION["t"]=$t;
        $_SESSION["s"]=$s;

    } else{

        var_dump($_SESSION);
        exit;

        echo '<script>f_mostraNaoDeu();</script>';
    ?>
        <!--<script>
            window.location.href = "../menu.php";
        </script>-->
    <?php
    }
?>