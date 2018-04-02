<div class="col-md-12 table-responsive">
	<div class="text-right">
		<a href="<?php echo site_url('funcionarios/novo') ?>" class="btn btn-success">Novo</a>
	</div>
	<br>
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
					<a href="<?php echo site_url('funcionarios/mostrar/').$funcionario->id; ?>" title="Visualizar dados">
						 <i class="fas fa-user"></i>
					</a>
					&nbsp;
					<a href="<?php echo site_url('funcionarios/editar/').$funcionario->id; ?>" title="Editar dados">
						 <i class="fas fa-edit"></i>
					</a>
					&nbsp;
					<a href="#" title="Deletar" onclick="return excluir('<?php echo site_url('funcionarios/deletar/').$funcionario->id; ?>')">
						 <i class="far fa-trash-alt"></i>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>