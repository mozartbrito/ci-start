<!-- header -->
<?php $this->load->view('template/header'); ?>
<!-- navbar -->
<?php  $this->load->view('template/navbar'); ?>
<!-- container -->
<div class="container">
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
  <div class="text-right">
    <a href="javascript:history.back(-1)" class="btn btn-warning">
      <i class="fas fa-arrow-left"></i>
      Voltar
    </a>
  </div>
</nav>
  <!-- breadcrumb -->
	<h1><?php echo $titulo; ?></h1>
  <!-- aqui vai nosso contudo -->
    <?php $this->load->view($conteudo) ?>
  <!-- aqui vai nosso conteudo -->
</div>
<!-- container -->

<!-- footer -->
<?php $this->load->view('template/footer'); ?>