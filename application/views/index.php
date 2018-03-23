<!-- header -->
<?php $this->load->view('template/header'); ?>
<!-- navbar -->
<?php if(isset($menu)): 
  $this->load->view('template/navbar'); 
  endif;
?>
<!-- container -->
<div class="container">
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
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