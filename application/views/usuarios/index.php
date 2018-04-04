<div class="col-md-12 table-responsive">
	<div class="text-right">
		<a href="<?php echo site_url('usuarios/cadastrar') ?>" class="btn btn-success">
			Novo
		</a>
	</div>
		<br>
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($usuarios as $usuario): ?>
				<tr>
					<td><?=$usuario->id?></td>
					<td><?=$usuario->nome?></td>
					<td><?=$usuario->email?></td>
					<td>
						<a href="<?php echo site_url('usuarios/mostrar/').$usuario->id; ?>">
							<i class="far fa-user"></i>
						</a>
						&nbsp;
						<a href="<?php echo site_url('usuarios/cadastrar/').$usuario->id; ?>">
							<i class="far fa-edit"></i>
						</a>
						&nbsp;
						<a href="#" onclick="return excluir('<?php echo site_url('usuarios/deletar/').$usuario->id; ?>')">
							<i class="far fa-trash-alt"></i>
						</a>

					</td>
				</tr>
			<?php endforeach; //foreach usuarios ?>
		</tbody>
	</table>
</div>