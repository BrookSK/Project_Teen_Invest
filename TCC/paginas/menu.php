<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.83.1">

        <title>Teen Invest</title>

        <!--colocando o icone no site do navegador-->
        <link rel="icon" href="../Img/icones/favicon_io/favicon.ico">

        <!-- CSS principal do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!--adicionando uma ligacao com o site para pegar icones-->
        <script src="https://kit.fontawesome.com/894395ce28.js" crossorigin="anonymous"></script>

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
        </style>


        <!-- Estilos personalizados para este modelo -->
        <link href="../css/menu.css" rel="stylesheet">
    </head>
    <body>
        
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
                    <img src="../Img/Logo/teste2.png" width="43px" height="23%" alt="Logo do Site">&nbsp &nbsp
                    <strong class="txtLog">TEEN INVEST</strong>
            </a>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <input class="form-control form-control-dark w-100" type="text" placeholder="Procurar" aria-label="Procurar">

            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="../bd/sair.php">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        &nbspSair
                    </a>
                </li>
            </ul>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    <span data-feather="home"></span>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Cursos.php">
                                    <span data-feather="book-open"></span>
                                    Cursos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="info"></span>
                                    Informações
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="edit"></span>
                                    Materiais de Apoio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="help-circle"></span>
                                    Notícias
                                </a>
                            </li>

                            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                                <span>Minha Conta</span>
                            </h6>

                            <li class="nav-item">
                                <?php
                                echo "<a class=nav-link href=Perfil.php?id=$id><span data-feather=user></span> Perfil </a>";
                                ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="help-circle"></span>
                                    Suporte
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="code"></span>
                                    Criadores
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="users"></span>
                                    Créditos
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Resumo do Aprendizado</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <button type="button" class="btn btn-sm btn-outline-secondary btnGraf">
                                <span data-feather="calendar"></span>
                                Esta Semana
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                    <h2>Principais Cotações</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>ATIVO</th>
                                    <th>ÚLTIMO(R$)</th>
                                    <th>VAL. MÁX</th>
                                    <th>VAL. MÍN</th>
                                    <th>VAR. DIA(%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>YDUQ3</td>
                                    <td>17,57</td>
                                    <td>17,59</td>
                                    <td>15,69</td>
                                    <td>11,13</td>
                                </tr>
                                <tr>
                                    <td>CVCB3</td>
                                    <td>13,45</td>
                                    <td>13,59</td>
                                    <td>11,90</td>
                                    <td>9,80</td>
                                </tr>
                                <tr>
                                    <td>ENEV3</td>
                                    <td>13,88</td>
                                    <td>13,88</td>
                                    <td>12,59</td>
                                    <td>9,72</td>
                                </tr>
                                <tr>
                                    <td>MRVE3</td>
                                    <td>11,09</td>
                                    <td>11,11</td>
                                    <td>9,95</td>
                                    <td>9,72</td>
                                </tr>
                                <tr>
                                    <td>AMER3</td>
                                    <td>26,96</td>
                                    <td>27,08</td>
                                    <td>24,16</td>
                                    <td>9,69</td>
                                </tr>
                                <tr>
                                    <td>CYRE3</td>
                                    <td>16,08</td>
                                    <td>16,14</td>
                                    <td>14,38</td>
                                    <td>9,46</td>
                                </tr>
                                <tr>
                                    <td>CASH3</td>
                                    <td>2,23</td>
                                    <td>2,25</td>
                                    <td>2,05</td>
                                    <td>9,39</td>
                                </tr>
                                <tr>
                                    <td>CIEL3</td>
                                    <td>2,68</td>
                                    <td>2,73</td>
                                    <td>2,51</td>
                                    <td>7,21</td>
                                </tr>
                                <tr>
                                    <td>EZTC3</td>
                                    <td>17,83</td>
                                    <td>18,00</td>
                                    <td>16,08</td>
                                    <td>7,20</td>
                                </tr>
                                <tr>
                                    <td>CMIN3</td>
                                    <td>6,14</td>
                                    <td>6,14</td>
                                    <td>5,75</td>
                                    <td>7,15</td>
                                </tr>
                                <tr>
                                    <td>RAIL3</td>
                                    <td>17,67</td>
                                    <td>17,67</td>
                                    <td>16,39</td>
                                    <td>6,78</td>
                                </tr>
                                <tr>
                                    <td>ALPA4</td>
                                    <td>25,59</td>
                                    <td>25,66</td>
                                    <td>23,56</td>
                                    <td>6,57</td>
                                </tr>
                                <tr>
                                    <td>JHSF3</td>
                                    <td>5,93</td>
                                    <td>6,01</td>
                                    <td>5,55</td>
                                    <td>6,49</td>
                                </tr>
                                <tr>
                                    <td>DXCO3</td>
                                    <td>14,92</td>
                                    <td>14,94</td>
                                    <td>14,03</td>
                                    <td>5,67</td>
                                </tr>
                                <tr>
                                    <td>LREN3</td>
                                    <td>24,15</td>
                                    <td>24,30</td>
                                    <td>21,13</td>
                                    <td>5,46</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <footer class="text-muted py-5">
                        <div class="container">
                            <p class="float-end mb-1">
                                <a href="#">Voltar para cima</a>
                            </p>
                            <p class="mb-1">
                                &copy; Bootstrap
                            </p>
                        </div>
                    </footer>
                </main>
            </div>
        </div>

        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
        <script src="../js/menu.js"></script>
    </body>
</html>
