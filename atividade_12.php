<?

if (isset($_POST['txt'])) {
    $txt = $_POST['txt'];
    $teste = strlen($txt);

    for ($i = 0; $i < $teste; $i++) {

        for ($a = 0; $a < $i; $a++) {
            echo $txt . "  ";
        }
    }
} else {
    echo "Digite uma palavra";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 12</title>
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