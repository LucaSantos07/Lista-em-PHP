<?
if (isset($_POST['num1'])) {
    $num1 = $_POST['num1'];


    $vetor = [];
    for ($i = 0; $i < 11; $i++) {

        echo $num1 . " * " . $i . " = " . ($vetor[] = $i * $num1 . "<br>");
    }
} else {
    echo "Digite u numero para tabuada";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 11</title>
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