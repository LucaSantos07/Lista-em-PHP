<?

function info($num1)
{

    echo " O " . $num1 . " é divisivel por ";
}


if (isset($_POST['num1'])) {

    $num1 = $_POST['num1'];

    if ($num1 % 10 == 0 || $num1 % 5 == 0 || $num1 % 2 == 0) {
        echo "<b>Seu Número Foi Dividido</b> <br><br>";
    }

    if ($num1 % 10 == 0) {
        echo info($num1) . " 10 <br><br>";
    }
    if ($num1 % 5 == 0 || $num1 == 5) {
        echo info($num1) . " 5 <br><br>";
    }
    if ($num1 % 2 == 0) {
        echo info($num1) . " 2 <br><br>";
    } elseif ($num1 <= 1) {

        echo "<b>Falha Na Divisão</b><br><br>";
        echo " O número <strong> " . $num1 . "</strong> não é divisivel";
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
    <title>Atividade 2</title>
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