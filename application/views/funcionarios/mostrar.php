<div class="card">
	<div class="card-body">
		<p><strong>Nome: </strong> <?php echo $funcionario->nome ?></p>
		<p><strong>Data Nascimento: </strong> <?php echo viewDate($funcionario->dt_nascimento) ?></p>
		<p><strong>Sexo: </strong> <?php echo $funcionario->sexo ?></p>
		<p><strong>Município/UF: </strong> <?php echo $funcionario->cidade .' / ' .$funcionario->sigla;  ?></p>
	</div>
</div>