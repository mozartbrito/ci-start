
    <!-- JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/jquery-3.2.1.min.js" ></script>
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js" ></script>
    <script src="<?php echo base_url(); ?>public/js/highcharts.js"></script>
    <script src="<?php echo base_url(); ?>public/js/exporting.js"></script>
    <script src="<?php echo base_url(); ?>public/js/sweetalert.min.js"></script>
    <script>
        function excluir(url) {
            swal({
              title: "Tem certeza que deseja excluir?",
              text: "Não poderá ser desfeito!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
              buttons: ["Cancelar", "Sim, excluir."],
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location.href = url;
              } else {
                swal("Cancelado com sucesso!");
              }
            });
        }
    </script>
    <?php if(isset($dados)): ?>
    <script>

      // Build the chart
Highcharts.chart('grafico1', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '<?php echo $titulo; ?>'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
        <?php foreach($dados as $key => $value){ ?>
        {
            name: '<?php echo $key; ?>',
            y: <?php echo $value; ?>,
        },
        <?php } ?>
        ]
    }]
});
    </script>
<?php endif; ?>
  </body>
</html>