<h1> Inserir nova matricula </h1>

<br>
<label class="badge badge-secondary"> Selecione o aluno </label>
<form method="post" action="processa_matricula.php">
	<select class="form-control" name="escolha_aluno">
		<option> Selecione um aluno </option>
		<?php
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
			}
		?>
	</select>

	<br>
	<label class="badge badge-secondary"> Selecione o curso </label>
	<select class="form-control" name="escolha curso">
		<option> Selecione um curso </option>
		<?php
			while($linha = mysqli_fetch_array($consulta_cursos)){
				echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
			}
		?>
	</select>
	<br>
	<input type="submit" value="Matricular aluno">

</form>