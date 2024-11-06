<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/css.css">
    <title>Resultado Exercício 4</title>
</head>
<body>

<div>
<div class="box">

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $texto = $_POST['texto'];
        $quantidade = strlen($texto); // Conta os caracteres da string

        echo "<p>A string '<strong>$texto</strong>' tem <strong>$quantidade</strong> caracteres.</p>";
    }
    ?>

</div>
    <a class="bt" href="index.php"> Voltar </a>
        </div>

<BR></BR>


</body>
</html>