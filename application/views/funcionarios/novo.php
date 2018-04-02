<div class="card">
	<div class="card-body">
		<form method="post" action="<?php echo site_url('funcionarios/cadastrar') ?>">
			<div class="form-group col-md-6">
				<label for="nome">Nome:</label>
				<input type="text" name="nome" class="form-control" required>
			</div>
			<div class="form-group col-md-6">
				<label for="nome">Data de Nascimento:</label>
				<input type="text" name="dt_nascimento" class="form-control" required>
			</div>
			<div class="form-group col-md-6">
				<label for="nome">Sexo:</label>
				<select name="sexo" required class="form-control">
					<option value="">Selecione</option>
					<option value="Feminino">Feminino</option>
					<option value="Masculino">Masculino</option>
				</select>
			</div>
			<div class="col-md-6">
				<input type="submit" value="Cadastrar" class="btn btn-success">
			</div>
		</form>
	</div>
</div>