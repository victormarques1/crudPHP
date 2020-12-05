<?php if(!isset($_GET['editar'])){ ?>

<h1> Inserir novo Curso </h1>
<br>

<form method="post" action="processa_curso.php">
	<label class="badge badge-secondary"> Nome Curso </label><br>
	<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do Curso">
	<br>
	<label class="badge badge-secondary"> Carga Horária </label><br>
	<input type="text" name="carga_horaria" placeholder ="Insira a carga horaria"> <br><br>
	<input type="submit" value="Inserir curso"> 
</form>	

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>
			
	<h1> Editar Curso </h1>
	<br>

	<form method="post" action="edita_curso.php">
		<input type ="hidden" name="id_curso" value="<?php echo $linha['id_curso']; ?>">
			<label class="badge badge-secondary"> Nome Curso </label><br>
			<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do Curso" value="<?php echo $linha['nome_curso']; ?>">
			<br>
			<label class="badge badge-secondary"> Carga Horária </label><br>
			<input type="text" name="carga_horaria" placeholder ="Insira a carga horaria" value="<?php echo $linha['carga_horaria']; ?>"> <br><br>
			<input type="submit" value="Editar curso"> 
	</form>	
		<?php } ?>
	<?php } ?>
<?php } ?>

