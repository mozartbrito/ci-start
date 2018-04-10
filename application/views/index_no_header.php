<!-- header -->
<?php $this->load->view('template/header'); ?>
<!-- navbar -->
<?php  //$this->load->view('template/navbar'); ?>
<!-- container -->
<div class="container">
	<h1><?php echo $titulo; ?></h1>
  <!-- aqui vai nosso contudo -->
    <?php $this->load->view($conteudo) ?>
  <!-- aqui vai nosso conteudo -->
</div>
<!-- container -->

<!-- footer -->
<?php $this->load->view('template/footer'); ?>