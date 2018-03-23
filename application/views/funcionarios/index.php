<div class="col-md-12 table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Data Nascimeto</th>
				<th>Sexo</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($funcionarios as $funcionario) { ?>
			<tr>
				<td><?php echo $funcionario->nome; ?></td>
				<td><?php echo $funcionario->dt_nascimento; ?></td>
				<td><?php echo $funcionario->sexo; ?></td>
				<td width="10%">
					<a href="<?php echo site_url('funcionarios/mostrar') ?>" title="Visualizar dados">
						 <i class="fas fa-user"></i>
					</a>
					&nbsp;
					<a href="<?php echo site_url('funcionarios/mostrar') ?>" title="Deletar">
						 <i class="far fa-trash-alt"></i>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>