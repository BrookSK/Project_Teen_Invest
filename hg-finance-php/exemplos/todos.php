<?php

/*
 * Obtendo os dados HG Finance
 *
 * Este exemplo mostra como exibir todos os dados recebidos da API utilizando a classe HGFinance.
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
$HGFinance = new HGFinance('SUA-CHAVE');

// Obtem os dados da API
$HGFinance->get();

// Insere os dados em variaveis para facilitar a utilizacao
$currencies = $HGFinance->data['currencies'];
$stocks = $HGFinance->data['stocks'];
$bitcoin = $HGFinance->data['bitcoin'];
$taxes = $HGFinance->data['taxes'][0];

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>HG Finance - Cotação Moedas</title>

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

    <div class="row">
      <div class="col-6 col-md">
        <h5>Moedas</h5>
        <ul class="list-unstyled text-small">
          <?php foreach ($currencies as $key => $value) : ?>
          <?php if(!is_array($value)) continue; ?>
          <li>
            <a class="text-muted" href="#" title="<?php echo $key; ?>" style="color: <?php echo $value['variation'] > 0 ? 'green' : 'red'; ?> !important;">
              <?php echo $value['name']; ?>: R$ <?php echo number_format($value['buy'], 2, ',', '.'); ?> (<?php echo number_format($value['variation'], 2, ',', ''); ?>%)
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-6 col-md">
        <h5>Mercados</h5>
        <ul class="list-unstyled text-small">
          <?php foreach ($stocks as $key => $value) : ?>
          <li>
            <a class="text-muted" href="#" style="color: <?php echo $value['variation'] > 0 ? 'green' : 'red'; ?> !important;">
              <?php echo $key; ?>: <?php echo number_format($value['variation'], 2, ',', ''); ?>%
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="col-6 col-md">
        <h5>Bitcoin</h5>
        <?php if($HGFinance->valid_key()): ?>
        <ul class="list-unstyled text-small">
          <?php foreach ($bitcoin as $key => $value) : ?>
          <?php if(!is_array($value)) continue; ?>
          <li style="margin-bottom: 15px;">
            <a class="text-muted" href="#" style="color: <?php echo $value['variation'] > 0 ? 'green' : 'red'; ?> !important; padding-bottom: 25px !important;">
              <?php echo $value['name']; ?>:<br>
              <?php echo $value['format'][0] == 'BRL' ? ' R$ ' : ' US$ '; ?>
              <?php echo number_format($value['last'], 2, ',', '.'); ?>
              (<?php echo number_format($value['variation'], 2, ',', ''); ?>%)
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      <?php else: ?>
      <div class="alert alert-danger">
        Dados de bitcoin precisam de uma chave.
      </div>
      <?php endif; ?>
      </div>

      <div class="col-6 col-md">
        <h5>Taxas</h5>
        <?php if($HGFinance->valid_key()): ?>
        <ul class="list-unstyled text-small">
          <li>
            <a class="text-muted" href="#">
              Data: <?php echo date('d/m/Y', strtotime($taxes['date'])); ?>
            </a>
          </li>
          <li>
            <a class="text-muted" href="#">
              CDI: <?php echo number_format($taxes['cdi'], 2, ',', '.'); ?>%
            </a>
          </li>
          <li>
            <a class="text-muted" href="#">
              Selic: <?php echo number_format($taxes['selic'], 2, ',', '.'); ?>%
            </a>
          </li>
        </ul>
        <?php else: ?>
        <div class="alert alert-danger">
          Dados de taxas precisam de uma chave.
        </div>
        <?php endif; ?>
      </div>

    </div>

  </div>
</body>
</html>
