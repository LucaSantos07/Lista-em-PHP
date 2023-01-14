<?

if (isset($_POST['ok'])) {

  $vet1 = array();



  $soma = 0;

  $contar = 0;


  for ($i = 0; $i < 20; $i++) {
    $gerador = rand(1, 20);
    $vet1[$i] = $gerador;
    echo $vet1[$i] . "<br>";
  }

  echo "<br> Maior numero: " . max($vet1);
  echo "<br> Numero menor: " . min($vet1);

  foreach ($vet1 as $i) {
    if ($i % 2 == 0) {
      $contar++;
    }
  }

  $porcen = ($contar / 20) * 100;

  echo "<br> A porcentagem de numeros pares é  $porcen% <br>";


  foreach ($vet1 as $i) {
    $soma = $soma + $i;
    $media = ($soma / 20);
  }

  echo "Media dos numeros $media";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Atividade 17</title>
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