<div class="container">
	<div class="row justify-content-md-center">
		<div class="card col-md-6" style="padding: 30px;">
			<!-- section -->
			<?php if($this->session->flashdata('mensagem') != '') { ?>
			<div class="alert alert-<?php echo $this->session->flashdata('tipo'); ?> text-center">
			  <?php echo $this->session->flashdata('mensagem'); ?>
			</div>
			<?php } 

				if($this->session->flashdata('destroy') === true) {
					$this->session->sess_destroy();
				}
			?>
			<div id="mensagem" class="text-center">
				
			</div>
			<br>
			<!-- section -->
			<div class="row">
				<img src="<?php echo site_url('public/img/ci.jpg') ?>" alt="" class="img-responsive" width="80" height="100" style="margin: 0 auto;">
				
			</div>
			<div class="row">
				<h2 class="text-danger text-center" style="margin: 0 auto;">
					<?php echo $titulo; ?>
				</h2>
			</div>
			<div class="row">
				<form action="" method="post" class="col-md-12" onsubmit="return false;" >
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="email" name="email" class="form-control" required id="email">
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" class="form-control" required id="senha">
					</div>
					<button type="button" class="btn btn-success col-md-12" onclick="return efetuaLogin()">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</div>