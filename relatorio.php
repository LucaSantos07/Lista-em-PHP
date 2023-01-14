<?


/*echo'<body>
<center>
	<h1 id = "titulo">Relatório Final</h1>
	<div id = "container">
		<strong>Úsuario</strong><br>' . $usuario . '<br>
		<strong>Titulo do livro<br></strong> ' . $livro . '<br>
		<strong>Data de Retira<br></strong>'. date('d/m/y') . '<br>
		<strong>Prazo de entrega:</strong> ' . $dataEntrega . ' Dias
	</div>
</center>

<center>
	<div id = "container" class = "atencao">

		<br>
		Caso ocorra o atraso da devolução do livro <br> será aplicado uma <strong>multa de R$1 por dia</strong>.
	</div>
</center>
</body>';*/



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>inicio</title>
</head>

<body>
	<form action="atividade_7.php" method="POST">
		<label>Usuario</label>
		<select name="usuario" id="user">
			<option value="aluno">Aluno</option>
			<option value="professor">Professor</option>
		</select>

		<input type="text" name="livro" id="book" placeholder="Nome do livro" required>
		<input type="submit" value="visualizar PDF" name="notDown">
		<input type="submit" value="Baixar Recibo" name="down">
		<select name="" id="">
			<option value="" id=""></option>
		</select>
	</form>

</body>

</html>








<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FINAL</title>
</head>

<body>
	<center>
		<h1 id="titulo">Relatório Final</h1>
		<div id="container">
			<p>Usuario<span id="usuario"></span></p>
			<strong>Úsuario</strong><br> <? $usuario ?> <br>

			<p>Livro<span id="livro"></span></p>
			<strong>Titulo do livro<br></strong> <? $livro ?> <br>

			<p>Data de Retira<span id="dataEntrega"></span></p>


			<strong>Data de Retira<br></strong> <? date('d/m/y') ?> <br>
			<strong>Prazo de entrega:</strong> <? $dataEntrega ?> Dias
		</div>
	</center>

	<center>
		<div id="container" class="atencao">

			<br>
			Caso ocorra o atraso da devolução do livro <br> será aplicado uma <strong>multa de R$1 por dia</strong>.
		</div>
	</center>
</body>

</html>

<script>
	function gerarRecibo() {
		document.getElementById('usuario').innerHTML = document.getElementById('user').value;
		document.getElementById('livro').innerHTML = document.getElementById('book').value;
		document.getElementById('dataEntrega').innerHTML = dataAtual();
		window.print();

	}

	function dataAtual() {
		let data = new Data();
		return data.getDate() + "/" + (data.getMonth() + 1) + "/" + data.getFullYear();
	}
</script>