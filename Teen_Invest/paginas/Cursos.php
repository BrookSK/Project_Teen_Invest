<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Cursos</title>
  <link rel="icon" href="../Img/icones/favicon_io/favicon.ico">

  <script language="javascript" type="text/javascript">
    function f_mostraDeu() {
      alert("Curso inserido com sucesso !");
    }

    function f_mostraNaoDeu() {
      alert("Não foi possivel a inserção do curso !");
    }
  </script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }


    strong {
      font-family: "Poppins", sans-serif;
      font-size: 23px;
    }
  </style>


  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/menu.css" rel="stylesheet">
  <link href="../css/cursos.css" rel="stylesheet">


</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="menu.php">
      <img src="../Img/Logo/teste2.png" width="43px" height="23%" alt="Logo do Site">&nbsp &nbsp
      <strong>Teen Invest</strong>
    </a>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <form class="" method="POST" action="validacoes/pesquisarCursos.php">
      <input class="form-control form-control-dark w-100" type="text" name="pesquisar" placeholder="Pesquisar">
      <input type="submit" value="Buscar">
    </form>

    <ul class="navbar-nav px-5">
      <li class="nav-item text-nowrap">
        <a class="nav-link" href="">
          <i class="fa-solid fa-arrow-right-from-bracket"></i>

        </a>
      </li>
    </ul>

  </header>

  <main>

    <section class="py-5 text-center container" style="width: 100%;">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="txtCurso">Cursos</h1>
          <p class="lead text-muted">Alguns cursos para você que quer aprender mais sobre educação financeira!</p>

        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <?php

      session_start();

      if ($_SESSION["tipo"] == "admin") {
      ?>
        <div class="container">
          <div class="text-center ">
            <h3>Cadastrar Curso</h3>
          </div>

          <form name="CadastraCurso" action="validacoes/cadastraCursos.php" method="POST">

            <div class="form mt-3">
              <div>
                <input type="text" placeholder="Nome do curso" class="form-control" name="nomeCurso" required="required"><br>
                <textarea type="text" placeholder="Descrição" class="form-control" name="descricao" required="required" rows="5">
                  Público-alvo: Iniciantes/Iniciados/Jovens e Adultos<br>
                  Carga horária: Total em horas<br>
                  Formato: Online ou não<br>
                  Oferece certificado? Sim/Não
                </textarea>
              </div><br>
              <div>
                <input type="text" class="form-control" placeholder="Preço" name="preco" required="required">
              </div><br>
              <div>
                <input type="text" class="form-control" placeholder="Link da Publicação" name="link" required="required">
              </div><br>
              <div class="mt-4 proceed">
                <button class="btn btn-cor text-center btn btn-outline-secondary btnGraf" name="cadastrar" value="cadastrar">
                  <div class="text-right">
                    <span>
                      Cadastrar Curso
                    </span>
                  </div>
                </button>
              </div><br>
          </form>
        </div>
      <?php
      }
      ?>
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          <?php
          /*1- definindo a conexao - local, usuario, senha e banco de dados*/
          include("../bd/conexao.php");

          /*2-selecionando e pegando os dados que foram inseridos*/
          $comandoSql2 = "select * from tb_cursos order by id_curos desc";

          /*3-conferendo tudo que foi inserido e colocando em uma variavel*/
          $resultado = mysqli_query($con, $comandoSql2);

          while ($dados = mysqli_fetch_assoc($resultado)) {
            $id = $dados["id_curos"];
            $_SESSION["id_curso"] = $dados["id_curos"];
            $nome = $dados["nome_cursos"];
            $descricao = $dados["descricao_cursos"];
            $preco = $dados["preco_cursos"];
            $link = $dados["link_cursos"];

          ?>

            <div class="col">
              <div class="card shadow-sm">
                <center><img src="../Img/cursos/FGV.png" width="70%" height="70%" alt="FGV">

                  <div class="card-body">
                    <p class="card-text txtValor"> <?php echo $nome ?></p>
                    <p><?php echo $descricao ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href="<?php echo $link ?>">
                          <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                          <?php
                          if ($_SESSION["tipo"] == "admin") {
                            echo "<a type='button' name='excluir' class='btn btn-danger' href=validacoes/excluiCursos.php?id={$_SESSION["id_curso"]}>Excluir curso</a>";
                          }
                          ?>
                        </a>
                      </div>
                      <small class="<?php if (is_numeric($preco) == true) { ?> text txtValor<?php } else { ?> text txtGratis<?php } ?>"><?php if (is_numeric($preco) == true) {echo 'R$ ' . $preco;} else {echo $preco;} ?></small>
                    </div>
                  </div>
              </div>
            </div>
          <?php
          }
          ?>
           
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/FGV.png" width="70%" height="70%" alt="FGV">

                <div class="card-body">
                  <p class="card-text txtValor"> FGV – Como Gastar Conscientemente</p>
                  <p>Público-alvo: Iniciantes<br>
                    Carga horária: 8 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Não</p>

                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://educacao-executiva.fgv.br/cursos/online/curta-media-duracao-online/como-gastar-conscientemente">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>

                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">

              <center><img src="../Img/cursos/Bradesco.png" width="70%" height="70%" alt="Fundação Bradesco">

                <div class="card-body">
                  <p class="card-text txtValor">Fundação Bradesco – Educação Financeira</p>
                  <p>Público-alvo: Iniciantes<br>Carga horária: 4 horas<br>
                    Formato: Online<br>Oferece certificado? Não informado</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://www.ev.org.br/cursos/educacao-financeira">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/serasa.png" width="70%" height="70%" alt="Serasa">

                <div class="card-body">
                  <p class="card-text txtValor">Serasa – Trilha Financeira</p>
                  <p>Público-alvo: Iniciantes<br>Carga horária: não informado<br>Formato: Online<br>Oferece certificado? Sim</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://www.serasa.com.br/ensina/dicas/curso-trilha-financeira/">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>


          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/Lumina.png" width="70%" height="70%" alt="Lúmina">

                <div class="card-body">
                  <p class="card-text txtValor">Lúmina/UFRGS – Educação Financeira no Século XXI para a Liberdade Financeira</p>
                  <p>Público-alvo: Iniciantes<br>
                    Carga horária: 25 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Sim<br><br></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://lumina.ufrgs.br/course/view.php?id=152">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/Udemy.png" width="70%" height="70%" alt="Udemy">

                <div class="card-body">
                  <p class="card-text txtValor">Udemy – Curso Completo de Educação Financeira</p>
                  <p>
                    Público-alvo: Iniciantes e iniciados no mundo das finanças pessoais e dos investimentos<br>
                    Carga horária: 8 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Sim</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://www.udemy.com/course/curso-completo-de-educacao-financeira/">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtValor">R$ 329,90</small>
                  </div>
                </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/XPEED.png" width="70%" height="70%" alt="XPEED">

                <div class="card-body">
                  <p class="card-text txtValor">XPEED – Educação Financeira para Jovens</p>
                  <p><br>
                    Público-alvo: Iniciantes<br>
                    Carga horária: 2 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Sim<br><br>
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://xpeedschool.com.br/curso/educacao-financeira-para-jovens/?gclid=Cj0KCQiAq7COBhC2ARIsANsPATHhjZ98laZU_XAcdjqgWcHPQdHcNpkhEsV2UBiy2DcLeUJoLEpfr0EaAsywEALw_wcB">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtValor">R$ 68,00</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/SENAT.png" width="70%" height="70%" alt="SEST SENAT">

                <div class="card-body">
                  <p class="card-text txtValor">EaD SEST SENAT – Educação Financeira</p>
                  <p>
                    Público-alvo: Iniciantes<br>
                    Carga horária: 20 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Não informado
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://ead.sestsenat.org.br/cursos/educacao-financeira/">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/Open.png" width="70%" height="70%" alt="OpenEdu">

                <div class="card-body">
                  <p class="card-text txtValor">OpenEdu</p>
                  <p><br>Conteúdos práticos e objetivos, até mesmo pra quem já investe<br><br></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://goopen.com.br/edu">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <center><img src="../Img/cursos/EV.G.png" width="70%" height="70%" alt="EV.G">

                <div class="card-body">
                  <p class="card-text txtValor">EV.G - Gestão de Finanças Pessoais</p>
                  <p>
                    Público-alvo: Jovens e adultos<br>
                    Carga horária: 20 horas<br>
                    Formato: Online<br>
                    Oferece certificado? Sim
                  </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://www.escolavirtual.gov.br/curso/170">
                        <button type="button" class="btn btn-outline-secondary btnGraf">Começar</button>
                      </a>
                    </div>
                    <small class="text txtGratis">Grátis</small>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Voltar para cima</a>
      </p>
      <p class="mb-1"> &copy; Bootstrap</p>

      <?php
      //var_dump($dados);
      //var_dump($id);
      //var_dump($nome);
      //var_dump($descricao);
      //var_dump($link);
      //var_dump($preco);
      ?>

    </div>
  </footer>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>