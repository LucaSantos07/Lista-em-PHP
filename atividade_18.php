<?
if (isset($_POST['ok'])) {
    $vet1 = array();
    $vet2 = array();
    $vet3 = array();

    echo "Vetor 1<br>";

    for ($i = 0; $i < 10; $i++) {
        $gerador = rand(1, 10);
        $vet1[$i] = $gerador;
        echo $vet1[$i] . " ";
    }

    echo "<br><br>Vetor 2<br>";

    for ($c = 0; $c < 20; $c++) {
        $gerador = rand(1, 20);
        $vet2[$c] = $gerador;
        echo $vet2[$c] . " ";
    }

    echo "<br><br>Vetor com numeros não comuns<br>";

    for ($i = 0; $i < 10; $i++) {

        if (!in_array($vet1[$i], $vet2)) {
            $vet3[] = $vet1[$i];
        } else if (!in_array($vet2[$i], $vet1)) {
            $vet3[] = $vet2[$i];
        }
    }
    for ($i = 0; $i < count($vet3); $i++) {
        echo $vet3[$i] . " ";
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
    <title>Atividade 18</title>
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