<a class="btn btn-success" href="?pagina=inserir_matricula">Inserir Matricula</a>

<table class="table table-hover table-striped" id="matriculas">
	<thead>
	<tr>
		<th> Nome aluno </th>
		<th> Curso aluno </th>
		<th> Deletar </th>
	</tr>
</thead>

	<tbody>
	<?php
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['nome_curso'].'</td>';
	?>	
		<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>"> Deletar </a></td></tr>
	<?php
		}
	?>
</tbody>

</table>