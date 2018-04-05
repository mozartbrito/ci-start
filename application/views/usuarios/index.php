<div class="col-md-12 table-responsive">
	<div class="row">
		<div class="text-left col-md-8">
			<form class="form-inline" method="post">
		      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Search" name="busca" autofocus>
		      <button class="btn btn-outline-success mr-sm-2" type="submit">Pesquisar</button>
		      <a href="<?php echo site_url('usuarios') ?>" class="btn btn-outline-warning">Limpar</a>
		    </form>
		</div>
		<div class="text-right col-md-4">
			<a href="<?php echo site_url('usuarios/cadastrar') ?>" class="btn btn-success">
				Novo
			</a>
		</div>
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
					<td>
						<?php
							echo marcarBusca($this->session->flashdata('marcar'), $usuario->nome);
						?>
					</td>
					<td>
						<?php 
							echo marcarBusca($this->session->flashdata('marcar'), $usuario->email);
						?>
					</td>
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
			<?php endforeach; ?>
		</tbody>
	</table>
	<!-- pagination -->
	<nav aria-label="Page navigation example">
	<?php if(isset($this->pagination)) { echo $this->pagination->create_links(); } ?>
	</nav>
	<!-- pagination -->
</div>