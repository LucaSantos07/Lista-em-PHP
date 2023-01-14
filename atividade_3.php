<?
if (isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['idade'])) {

    $dados = [$nome = $_POST['nome'], $sexo = $_POST['sexo'], $idade = $_POST['idade']];

    if ($idade < 25 && $sexo == 'Feminino') {

        echo $nome . " Foi Aceita";
    } else {
        echo $nome . " Não Foi Aceita";
    }
} else {
    echo "Informe os dados Solicitados";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 3</title>
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