<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

</html>

<?

if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = $num1 + $num2;

    echo "O valor somado é : <strong>" . $soma . "</strong><br>";

    if ($soma > 20) {
        $soma += 8;
        echo "<br>O resultado sendo maior que 20 foi adicionado 8: <strong> " . $soma . "</strong><br>";
    } elseif ($soma <= 20) {
        $soma -= 5;

        echo "<br>O resultado sendo maior ou igual a 20 foi subtratido 5:  <strong>" . $soma . "</strong><br>";
    }
} else {
    echo "informe dois numeros";
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <a href="index.php">
        <button>
            Voltar
        </button>
    </a>

</body>

</html>