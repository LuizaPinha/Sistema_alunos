<?php
	include("cabecalho.inc.php");
?>

	<form action="insere.php" method="POST">
		<p>
		<label>Nome:</label>
		<input type="text" name="nome" />
		</p>
		
		<p>
		<label>Endereço:</label>
		<input type="text" name="endereco" />
		</p>
		
		<p>
		<label>Idade:</label>
		<input type="number" name="idade" />
		</p>
		
		<p>
		<input type="submit" value="Salvar" />
		</p>
	</form>
		
<?php
	include("rodape.inc.php");
?>