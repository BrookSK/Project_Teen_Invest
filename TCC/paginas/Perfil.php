<?php

include_once "validacoes/crud.php";
include_once "validacoes/crud2.php";

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
    <title>Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
            <h1>Meu Perfil</h1>
        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->


            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">

                <input type="file" class="text-center center-block file-upload">
            </div>
            </hr><br>
        </div>
        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Dados do Usuário</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form name="Perfil" class="form" action="validacoes/passaDados.php" method="POST" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>Nome</h4>
                                </label>
                                <input type="text" class="form-control" name="PrimeiroNome" value="<?php echo $pn ?>" required="required" title="Digite seu nome">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Sobrenome</h4>
                                </label>
                                <input type="text" class="form-control" name="UltimoNome" value="<?php echo $un ?>" required="required" title="digite seu sobrenome">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="cpf">
                                    <h4>CPF</h4>
                                </label>
                                <input type="text" class="form-control" name="cpf" value="<?php echo $cpf ?>" required="required" title="Digite seu CPF" placeholder="000.000.000-00">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Telefone</h4>
                                </label>
                                <input type="text" class="form-control" name="telefone" value="<?php echo $t ?>" required="required" title="Digite seu telefone" placeholder="(00) 0000-0000">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="nascimento">
                                    <h4>Nascimento</h4>
                                </label>
                                <input class="form-control input-md" type="date" maxlength="10" name="nascimento" value="<?php echo $n ?>" required="required" placeholder="DD/MM/AAAA" title="Digite sua data de nascimento" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $e ?>" required="required" title="Digite seu email">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Senha</h4>
                                </label>
                                <input type="password" class="form-control" name="senha" id="password" value="<?php echo $s ?>" required="required" title="Digite sua senha">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <button style="background-color: #2055a6;" class="btn btn-cor2 btn-lg btn-success " type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Salvar</button>

                            </div>
                        </div>
                    </form>

                    <hr>




                </div>
            </div>
            </form>
        </div>
        <!--/tab-pane-->
    </div>
    <!--/tab-content-->

</div>
<!--/col-9-->
</div>
<!--/row-->
<!-- $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
}); 