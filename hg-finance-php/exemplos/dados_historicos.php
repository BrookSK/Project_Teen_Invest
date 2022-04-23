<?php

/*
 * Obtendo os dados HG Finance
 *
 * Este exemplo mostra como exibir dados historidos da API utilizando a classe HGFinance.
 *
 * !!! Este metodo requer um plano com suporte a dados historicos !!!
 *
 * Consulte nossa documentacao em https://console.hgbrasil.com/documentation/finance
 * Contato: https://console.hgbrasil.com/tickets
 *
 * Ontenha uma chave gratuitamente: https://console.hgbrasil.com/keys
 *
 * Copyright 2018 - HG Brasil - HG Finance
 *
*/

include '../hg_finance.php';

// Insira sua chave abaixo
$HGFinance = new HGFinance('d1019797');

// Obtem os dados historicos da API

// Por intervalo de data
// $HGFinance->get('historical', array('start_date' => '2018-12-20', 'end_date' => '2018-12-24'));

// Por uma data
// $HGFinance->get('historical', array('date' => '2018-12-20');

// Por numero de dias atras
$HGFinance->get('historical', array('days_ago' => 20));

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>HG Finance - Dados Historicos</title>

  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .container {
    margin-top: 50px;
  }
  </style>

</head>
<body>
  <div class="container">

    <!-- Pode ser removido, apenas para informar que a chave esta invalida -->
    <?php if(!$HGFinance->valid_key()): ?>
      <div class="alert alert-danger mb-5" role="alert">
        <h4 class="alert-heading">Chave inválida</h4>
        <p>A chave informada (<?php echo $HGFinance->get_key(); ?>) não é válida.<br>Insira uma chave válida no exemplo para visualizar todos os dados.</p>
        <p>Você pode criar uma chave gratuitamente clicando no link abaixo:</p>
        <a href="https://console.hgbrasil.com/keys" class="btn btn-primary" target="_blank">Criar minha chave</a>
      </div>
    <?php endif; ?>

    <?php if($HGFinance->data['error']): ?>
    <div class="alert alert-danger mb-5" role="alert">
      <h4 class="alert-heading">Retornou erro</h4>
      <p>Erro retornado: <?php echo $HGFinance->data['message'] ?></p>
      <p>Provavelmente sua chave não tem acesso aos dados históricos, você precisa escolher um plano com suporte à esses dados para continuar.</p>
      <a href="https://console.hgbrasil.com/subscribe/register?selected=professional" class="btn btn-primary" target="_blank">Conheça nossos planos</a>
    </div>
    <?php else: ?>

    <?php foreach ($HGFinance->data as $key => $value): ?>
    <h4><?php echo date('d/m/Y', strtotime($key)); ?></h4>
    <hr>

    <div class="row mb-5">

      <div class="col-6 col-md">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Moedas</h5>

            <?php foreach ($value['currencies'] as $c_key => $c_value): ?>
            <p class="card-text">
              <?php echo $c_value['name']; ?>:
              R$ <?php echo number_format($c_value['min'], 2, ',', '.'); ?> ~ R$ <?php echo number_format($c_value['max'], 2, ',', '.'); ?><br>
              R$ <?php echo number_format($c_value['last'], 2, ',', '.'); ?>
            </p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="col-6 col-md">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Mercados</h5>

            <?php foreach ($value['stocks'] as $c_key => $c_value): ?>
            <p class="card-text">
              <?php echo $c_key; ?>:
              <?php echo number_format($c_value['min'], 2, ',', '.'); ?>% ~ <?php echo number_format($c_value['max'], 2, ',', '.'); ?>%<br>
              <?php echo number_format($c_value['last'], 2, ',', '.'); ?>%
            </p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="col-6 col-md">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Bitcoin</h5>

            <?php foreach ($value['bitcoin'] as $c_key => $c_value): ?>
            <p class="card-text">
              <?php echo $c_value['name']; ?>:<br>
              R$ <?php echo number_format($c_value['min'], 2, ',', '.'); ?> ~ R$ <?php echo number_format($c_value['max'], 2, ',', '.'); ?><br>
              R$ <?php echo number_format($c_value['last'], 2, ',', '.'); ?>
            </p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>

    <?php endforeach; ?>

  <?php endif; ?>

  </div>
</body>
</html>
