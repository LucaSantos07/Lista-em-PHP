<?

if (isset($_POST['ok'])) {

  $numerosP = array();


  $soma = 0;

  for ($i = 1; $i <= 15; $i++) {

    if ($_POST["$i"] > 0) {
      $numerosP[$i] = $_POST["$i"];
    } else {
      $numerosN[$i] = $_POST["$i"];
    }
  }
  // var_dump ($numerosP);

  for ($i = 1; $i <= COUNT($numerosP); $i++) {



    if ($numerosP[$i] % 2 == 0) {

      echo $numerosP[$i] . " par <br>";
    } else {
      echo $numerosP[$i] . " impar <br>";
    }
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
    <title>Atividade 16</title>
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