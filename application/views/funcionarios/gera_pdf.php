<div class="img-topo" align="center">
	<img src="<?php echo base_url('public/img/ci.jpg'); ?>" alt="" width="50px">
</div>
<h1>Lista de funcionarios</h1>

<table>
	<thead>
		<tr>
			<th>Nome</th>
			<th>Data Nascimento</th>
			<th>Sexo</th>
			<th>Município/UF</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($funcionarios as $funcionario) { ?>
		<tr>
			<td><?php echo $funcionario->nome ?></td>
			<td><?php echo $funcionario->dt_nascimento ?></td>
			<td><?php echo $funcionario->sexo ?></td>
			<td><?php echo $funcionario->cidade.'/'.$funcionario->sigla ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>