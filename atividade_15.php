<?
if (isset($_POST['massa'])) {
    $massa = $_POST['massa'];
    $massa2 = 0.10;
    $temp = 0;

    while ($massa2 < $massa) {
        $massa -= $massa * 0.25;
        $temp += 30;
    }
    $minuto = $temp / 60;

    echo "O tempo necessario para que a massa seja menor que 0.10 é $temp Segundos ou $minuto Minutos.";
} else {
    echo "Informe o valor da massa";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 15</title>
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