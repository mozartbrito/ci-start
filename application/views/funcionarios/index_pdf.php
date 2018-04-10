<?php //$this->load->view('template/header'); ?>
<div class="col-md-12 table-responsive">
	<div class="text-right">
		<a href="<?php echo site_url('funcionarios/cadastrar') ?>" class="btn btn-success">Novo</a>
	</div>
	<br>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Data Nascimeto</th>
				<th>Sexo</th>
				<th>Município / UF</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($funcionarios as $funcionario) { ?>
			<tr>
				<td><?php echo $funcionario->nome; ?></td>
				<td><?php echo viewDate($funcionario->dt_nascimento) ?></td>
				<td><?php echo $funcionario->sexo; ?></td>
				<td><?php echo $funcionario->cidade.'/'.$funcionario->sigla; ?></td>
				
			</tr>
			<?php } ?>
		</tbody>
	</table>

</div>
<?php $this->load->view('template/footer'); ?>