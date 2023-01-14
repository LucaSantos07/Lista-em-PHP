<?
if (isset($_POST['num1'])) {
  $num1 = $_POST['num1'];

  for ($i = 0; $i < $num1; $i++) {

    echo "  " . ($i + 1);
  }

  if ($num1 <= 0) {
    echo "Digite um numero maior que 0";
  }
} else {
  echo "Digite um numero";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 8</title>
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