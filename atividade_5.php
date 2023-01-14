<?
$lado1 = $_POST['lado1'];

$lado2 = $_POST['lado2'];

$lado3 = $_POST['lado3'];

if (isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])) {

   if ($lado1 <= 0 || $lado2 <= 0 || $lado3 <= 0) {

      echo "Informe um valor maior que 0";
   } elseif ($lado1 == $lado2 && $lado1 > $lado3 || $lado2 == $lado3 && $lado2 >  $lado1 || $lado3 == $lado1 && $lado3 > $lado2 || $lado1 < $lado2) {

      echo "Esse é Um Triangulo Isósceles";
   } elseif ($lado1 != $lado2 && $lado1 != $lado3 || $lado2 != $lado1 && $lado2 != $lado3 || $lado3 != $lado2 && $lado3 != $lado1) {

      echo "Triangulo Escaleno";
   } elseif ($lado1 == $lado2 && $lado1 == $lado3 || $lado2 == $lado1 && $lado2 == $lado3 || $lado3 == $lado2 && $lado3 == $lado1) {
      echo "Triangulo Equilatero";
   } elseif ($lado1 == $lado2 && $lado3 == $lado1 && $lado2 == $lado3 && $lado1 == $lado3 && $lado1 == $lado3 && $lado2 == $lado3) {

      echo "Triangulo Retangulo";
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
    <title>Atividade 5</title>
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