<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo site_url('funcionarios/salvar') ?>">
			<div class="form-group col-md-6">
				<label for="nome">Nome:</label>
				<input type="hidden" name="id" value="<?php echo (isset($funcionario) ? $funcionario->id : ''); ?>">
				<input type="text" name="nome" class="form-control" required value="<?php echo (isset($funcionario) ? $funcionario->nome : ''); ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="nome">Data de Nascimento:</label>
				<input type="text" name="dt_nascimento" class="form-control" required value="<?php echo (isset($funcionario) ? viewDate($funcionario->dt_nascimento) : ''); ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="nome">Sexo:</label>
				<select name="sexo" required class="form-control">
					<option value="">Selecione</option>
					<option value="Feminino" <?php echo ((isset($funcionario) AND $funcionario->sexo == 'Feminino') ? 'selected="selected"' : ''); ?>>Feminino</option>
					<option value="Masculino" <?php echo ((isset($funcionario) AND $funcionario->sexo == 'Masculino') ? 'selected="selected"' : ''); ?>>Masculino</option>
				</select>
			</div>
			<div class="col-md-6">
				<input type="submit" value="<?php echo (isset($funcionario) ? 'Editar' : 'Cadastrar'); ?>" class="btn btn-success">
			</div>
		</form>
	</div>
</div>