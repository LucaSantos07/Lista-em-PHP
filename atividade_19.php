<?
if (isset($_POST['ok'])) {
    $tam = 5;
    $matriz = array();

    //colocando valores na matriz
    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {
            $matriz[$i][$a] = rand(0, 9);
        }
    }

    echo "Essa é a matriz <br>";

    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {
            echo $matriz[$i][$a] . "  ";
        }

        echo "<br>";
    }

    echo "<br>";

    echo "Diagonal Principal <br>";

    //O codigo abaixo vai imprir a diagonal principal
    for ($i = 0; $i < $tam; $i++) {

        echo $matriz[$i][$i] . " ";
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
    <title>Atividade 19</title>
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