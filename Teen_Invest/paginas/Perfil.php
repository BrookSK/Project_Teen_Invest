<?php
session_start();
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
    <link rel="icon" href="../Img/icones/favicon_io/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--adicionando uma ligacao com o site para pegar icones-->
    <script src="https://kit.fontawesome.com/894395ce28.js" crossorigin="anonymous"></script>
   <style type="text/css">
       .icone{margin-top: 40px;}
      
   </style>
    
</head>

<div class="container">
    <div class="row">
        <div class="col-sm-10">
            
        <center><img src="../Img/Icones/user_1.png" alt="Icone" width="64px" height="64px" class="icone"><h1>Meu Perfil</h1></center>
        </div>
    </div>

    <div class="row">     

        <!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav">
                <h4><li class="active"><a data-toggle="tab">Dados do Usuário</a></li></h4>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    
                    <form name="Perfil" class="form" action="validacoes/passaDados.php" method="POST" id="registrationForm">
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="first_name">
                                    <h4>Nome</h4>
                                </label>
                                <input type="text" class="form-control" name="PrimeiroNome" value="<?php echo $_SESSION['pn'] ?>" required="required" title="Digite seu nome">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="last_name">
                                    <h4>Sobrenome</h4>
                                </label>
                                <input type="text" class="form-control" name="UltimoNome" value="<?php echo $_SESSION['un'] ?>" required="required" title="digite seu sobrenome">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="cpf">
                                    <h4>CPF</h4>
                                </label>
                                <input type="text" class="form-control" name="cpf" value="<?php echo $_SESSION['cpf'] ?>" required="required" title="Digite seu CPF" placeholder="000.000.000-00">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone">
                                    <h4>Telefone</h4>
                                </label>
                                <input type="text" class="form-control" name="telefone" value="<?php echo $_SESSION['t'] ?>" required="required" title="Digite seu telefone" placeholder="(00) 0000-0000">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="nascimento">
                                    <h4>Nascimento</h4>
                                </label>
                                <input class="form-control input-md" type="date" maxlength="10" name="nascimento" value="<?php echo $_SESSION['n'] ?>" required="required" placeholder="DD/MM/AAAA" title="Digite sua data de nascimento" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email">
                                    <h4>Email</h4>
                                </label>
                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['e'] ?>" required="required" title="Digite seu email">
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password">
                                    <h4>Senha</h4>
                                </label>
                                <input type="password" class="form-control" name="senha" id="password" value="<?php echo $_SESSION['s'] ?>" required="required" title="Digite sua senha">
                            </div>
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <br>
                                <input type="submit" name="alterar" class="btn btn-primary" value="Salvar alterações"></input>
                                <?php
                                    echo "<a type='button' name='excluir' class='btn btn-danger' href=validacoes/excluiConta.php?id={$_SESSION["id"]}>Excluir conta</a>";
                                ?>
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
    <hr>
    <footer class="text-muted py-5">
        <div>
            <p class="mb-1">
                &copy; Copyright <span>Teen Invest</span>. Todos os direitos reservados
            </p>
        </div>
    </footer>
</div>
</div>