<?php

include 'db.php';

$nome_aluno = $_POST['nome_aluno'];
$data_nasc = $_POST['data_nasc'];

$query = "INSERT INTO ALUNOS(nome_aluno, data_nasc) 
	VALUES ('$nome_aluno', '$data_nasc')";

mysqli_query($conexao, $query); //inserindo

header('location:index.php?pagina=alunos'); //voltando para alunos após inserção