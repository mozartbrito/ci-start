
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
    <script>
        var base_url = "<?php echo base_url(); ?>";
        
        function efetuaLogin() {
            var email_form = $('#email').val();
            var senha_form = $('#senha').val();
            if(email_form == '' || senha_form == '') {
                $('#mensagem').html('<span class="alert alert-danger">Email e senha são obrigatórios.</span>');
                $('#email').focus();
            } else {
                $.ajax({
                    type: "POST",
                    url: base_url + "login/logar",
                    data: { email: email_form, senha: senha_form },
                    beforeSend: function(){
                        var img = '<img src="<?php echo base_url('public/img/loading.gif') ?>" width="50">';
                        $('#mensagem').html(img);
                    },
                    success: function(result) {
                        if(result == 1) {
                            var mensagem = '<div class="alert alert-success text-center">Login efetuado com sucesso! <br /> Aguarde que será redirecionado.</div>'; 
                            setTimeout(function(){
                                window.location.href = base_url + "principal";
                            }, 2000);
                        } else if(result == 0) {
                            var mensagem = '<div class="alert alert-danger text-center">Usuário não encontrado ou não possui permissão de acesso!</div>';
                        }
                        $('#mensagem').html(mensagem);
                        
                    }
                });
            }
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