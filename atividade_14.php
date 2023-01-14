<?

$chico = 150;
$juca = 110;
$anos = 0;

while ($juca <= $chico) {
    $chico += 2;
    $juca += 3;
    $anos++;
}

if (isset($_POST['altura'])) {
    $altura = $_POST['altura'];

    if ($altura == 41) {
        echo "<b> ACERTO !!!!!!</b> <br>";

        echo "Em " . "<b> $anos </b>" . " Anos juca será maior que chico";
    } else {
        echo "ERROU EM IRMÃO";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 14</title>
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