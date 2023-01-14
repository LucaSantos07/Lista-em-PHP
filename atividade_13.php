<?


if (isset($_POST['OK'])) {

    $num = array();
    $contar = 0;

    // var_dump($gera);
    /* NESSE PRIMEIRO FOR O $i <= 1 O NUMERO UM É O TANTO DE CAMPOS QUE EU TENHO DENTRO DA INDEX
PORÉM PRECISO CRIAR UM RANDOM PARA QUE ESSSE NUMEROS GEREM ALTOMATICAMENTE
PRECISO IMPRIR OS NUMEROS DO RANDOM E PRECISO IMPRIMIR A QUANTIDADE DE NUMEROS ENTRE 100 E 200
QUE FORAM GERADAS PELO RANDO */
    for ($i = 0; $i <= 10; $i++) {
        $gera = rand(1, 300);
        $num[$i] = $gera;

        echo $num[$i] . "<br>";

        if ($num[$i] > 100 && $num[$i] < 200) {
            $contar++;
        }

        if ($num == 0) {

            echo "Fim do programa";
            return;
        }
    }

    echo "<br> O total de numeros entre 100 e 200 é " . $contar;
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