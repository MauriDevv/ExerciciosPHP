<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 2</title>
</head>
<body>
    <div>
        <div class="box">
<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST") {

$numero1 = $_POST['numero1'];

$resultado = $numero1 ** 2;


echo "Resultado de $numero1^2 : <br> $resultado";

}

?>
<BR>
    </div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>
</body>
</html>