<?

if (isset($_POST['usuario']) && isset($_POST['livro'])) {

    $usuario = $_POST['usuario'];
    $livro = $_POST['livro'];

    if ($usuario == "aluno") {

        $dataEntrega = 3;
    } else {

        $dataEntrega = 10;
    }

    if (isset($_POST['notDown'])) {


        echo '<body>
            <center>
	            <h1 id = "titulo">Relatório Final</h1>
	            <div id = "container">
	                <strong>Úsuario</strong><br>' . $usuario . '<br>
	                <strong>Titulo do livro<br></strong> ' . $livro . '<br>
                    <strong>Data de Retira<br></strong>' . date('d/m/y') . '<br>
	                <strong>Prazo de entrega:</strong> ' . $dataEntrega . ' Dias
	            </div>
	        </center>

	        <center>
	            <div id = "container" class = "atencao">
	
	                <br>
	                Caso ocorra o atraso da devolução do livro <br> será aplicado uma <strong>MULTA de R$90 por dia</strong>.
	            </div>
	        </center>
	    </body>';
    }
} else {
    echo "Informe os Valores";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 7</title>
</head>

<body>
    <br><br>
    <a href="index.php">
        <button>
            Voltar
        </button>
    </a>

</body>

</html>