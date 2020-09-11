<?php

	include('cabecalho_conexao.php');
	
	$SQL = "SELECT * FROM pessoas";
	
	// Executa o comando SQL
	$dados_recuperados = mysqli_query($con, $SQL);

	if(mysqli_num_rows($dados_recuperados) > 0){
		echo'<table border = "1">
				<tr>
					<th>Ra</th>
					<th>Nome</th>
					<th>Idade</th>
					<th>Endereco</th>
					<th colspan = "2">Operacoes</th>
				</tr>';
		while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
	
			echo '
					<tr>
						<td>'.$resultado[0].'</td>
						<td>'.$resultado[1].'</td>
						<td>'.$resultado[2].'</td>
						<td>'.$resultado[3].'</td>
						<td><a href="remo_aluno.php?pront='.$resultado[0].'">Remover</a></td>
						<td><a href="edit_aluno.php?pront='.$resultado[0].'">Editar</a></td>
					</tr>
				';
		}	
		echo '</table>';	
	}
	
	
	mysqli_close($con);
	echo '</br><a href="menu.php">Voltar</a>';
?>