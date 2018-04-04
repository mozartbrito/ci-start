<div class="card col-md-12" style="padding: 20px;">
	
	<form action="<?php echo site_url('usuarios/salvar') ?>" method="post">
		<div class="form-group">
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="form-control col-md-6" value="<?php echo (isset($usuario) ? $usuario->nome : ''); ?>" required>
			<input type="hidden" name="id" value="<?php echo (isset($usuario) ? $usuario->id : ''); ?>">
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" name="email" class="form-control col-md-6" value="<?php echo (isset($usuario) ? $usuario->email : ''); ?>" required>
		</div>
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control col-md-6" value="" <?php echo (isset($usuario) ? '' : 'required'); ?> >
		</div>
		<div class="form-group">
			<input type="submit" value="<?php echo (isset($usuario) ? 'Editar' : 'Cadastrar'); ?>" class="btn btn-primary">
		</div>
	</form>
</div>