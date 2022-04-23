<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <title>Gráfico JS</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var ctx = document.getElementsByClassName("line-chart")

var ChartGraph = new Chart(ctx, {
    type:'line',
    data:{
      labels: ["Jan", "Fev", "Mar", "Abr", "Mai", "Jun","Jul", "Ago", "Set", "Out", "Nov", "Dez"],
      datasets: [{
        label: "Taxa de Cliques - 2020",
        data: [5,10,5,14,20,15,6,14,8,12,15,5,10],
        borderWidth: 6,
        borderColor: 'rgba(77,166,253,0.85)',
        backgroundColor: 'transparent',
      }]

    }
  })
    </script>
    
</head>

<body>

<canvas class="line-chart"></canvas>
</body>

</html>