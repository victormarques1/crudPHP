<?php

#mysqli
$servidor = "localhost";
$usuario = "victor";
$senha ="";
$database ="aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

if($conexao){
	echo "Conectado com sucesso";
}

#Criando tabelas 
#Tabela curso (nome do curso, carga horaria)
/*
$query = "CREATE TABLE CURSOS(
    id_curso int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
)"; 

$executar = mysqli_query($conexao, $query); 

#tabela aluno (nome do aluno, data de nascimento)
$query = "CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nasc date,
    primary key(id_aluno)
)";

$executar = mysqli_query($conexao, $query);

#tabela aluno_cursos (aluno, curso)
$query = "CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
)";

$executar = mysqli_query($conexao, $query);

#INSERIR DADOS NA TABELA
$query = "INSERT INTO ALUNOS(nome_aluno, data_nasc) 
VALUES ('Rodinei', '1990-05-22')";
$executar = mysqli_query($conexao, $query);

$query = "INSERT INTO ALUNOS(nome_aluno, data_nasc) 
VALUES ('Moises', '1995-05-22')";
$executar = mysqli_query($conexao, $query);

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria)
values ('PHP', '5')";
$executar = mysqli_query($conexao, $query);
 
$query = "INSERT INTO ALUNOS_CURSOS(id_aluno, id_curso)
VALUES ('1', '1')";
$executar = mysqli_query($conexao, $query);
*/


/*
echo '<table border=1>
        <tr>
	        <th> id </th>
	        <th> Nome </th>
	        <th> Data de nascimento </th>
	    </tr>';
$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

while($linha = mysqli_fetch_array($consulta)){
	echo '<tr><td>'.$linha['id_aluno'].'</td>';
	echo '<td>'.$linha['nome_aluno'].'</td>';
	echo '<td>'.$linha['data_nasc'].'</td></tr>';
}

echo '</table>';     

$consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, CURSOS.nome_curso from ALUNOS, CURSOS, ALUNOS_CURSOS where ALUNOS_CURSOS.id_aluno = ALUNOS.id_aluno and ALUNOS_CURSOS.id_curso = CURSOS.id_curso");

echo '<table border=1><tr><th> Nome do Aluno </th><th>Nome do curso</th></tr>';

while($linha = mysqli_fetch_array($consulta)){
	echo '<tr><td>'.$linha['nome_aluno'].'</td>';
	echo '<td>'.$linha['nome_curso'].'</td></tr>';
}

echo '</table>'; 
*/

