<?
if (isset($_POST['OK'])) {

    $tam = 5;
    $matriz = array();
    $matrizPar = array();
    $matrizImpar = array();


    //Colocando valores na matriz
    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {
            $matriz[$i][$a] = rand(0, 9);
        }
    }

    echo "Matriz<br>";
    //codigo para imprimir a matriz

    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {
            echo $matriz[$i][$a] . "  ";
        }
        echo " <br> ";
    }

    echo " <br> ";

    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {

            if ($matriz[$i][$a] % 2 == 0) {
                $matrizPar[$i][$a] = $matriz[$i][$a];
                $matrizImpar[$i][$a] = "x";
            } elseif ($matriz[$i][$a] % 2 == 1) {
                $matrizImpar[$i][$a] = $matriz[$i][$a];
                $matrizPar[$i][$a] = "x";
            }
        }
    }

    echo "Numeros Pares<br>";

    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {

            echo $matrizPar[$i][$a] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    echo "Numeros Imapres<br>";

    for ($i = 0; $i < $tam; $i++) {

        for ($a = 0; $a < $tam; $a++) {
            echo $matrizImpar[$i][$a] . " ";
        }

        echo "<br>";
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
    <title>Atividade 20</title>
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