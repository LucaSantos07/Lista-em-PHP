<?

if (
  isset($_POST['num1']) &&

  isset($_POST['num2']) &&

  isset($_POST['num3'])
) {
  $vetor = [
    $num1 = $_POST['num1'],
    $num2 = $_POST['num2'],
    $num3 = $_POST['num3'],
  ];

  rsort($vetor);

  $i = null;

  for ($i = 0; $i < count($vetor); $i++) {

    echo " " . $vetor[$i];
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
    <title>Atividade 4</title>
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