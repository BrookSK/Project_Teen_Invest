<?php

/*
 * Obtendo os dados HG Finance
 *
 * Consulte nossa documentacao em https://console.hgbrasil.com/documentation/finance
 * Contato: https://console.hgbrasil.com/tickets
 *
 * Ontenha uma chave gratuitamente: https://console.hgbrasil.com/keys
 *
 * Copyright 2018 - HG Brasil - HG Finance
 *
*/

include "hg_finance.php";

// Primeiro parametro do construtor recebe a chave da API
$HGFinance = new HGFinance('d1019797');

// Voce pode configurar via metodos
// $HGFinance->set_key('SUA-CHAVE');
// $HGFinance->set_locale('en');
// $HGFinance->set_use_ssl(true);

// Metodo para obter os todos dados
$finance = $HGFinance->get();

?>

<?php

// Retorno dos resultados da API
pr($HGFinance->data);

//echo $finance['stocks']['IBOVESPA']['variation'];

// Pegando o preço de compra do dolar
//echo $finance['currencies']['USD']['buy'];

//echo $finance['currencies']['results']['petr4'];

?><!--
<?php //foreach ($finance['bitcoin'] as $key => $value) : ?>
<h1><?php //echo $value['name']; ?></h1>
<h3 style="color: <?php //echo $value['variation'] >= 0 ? 'green' : 'red' ?>;">
  <?php //echo ($value['format'][0] == 'BRL' ? 'R$' : 'US$') . number_format($value['last'], 2, ',', '.'); ?> <small>(<?php //echo $value['variation'] ?>)</small>
</h3>
<?php //endforeach; ?>
-->